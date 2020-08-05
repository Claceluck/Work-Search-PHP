<?php

namespace Philip\Work\Controllers;

use Philip\Work\Base\Controller;
use Philip\Work\Base\Request;
use Philip\Work\Services\NewsService;
use Philip\Work\Services\CommentService;

class NewsController extends Controller
{
    private $newsService;
    private $commentService;
    public function __construct()
    {
        $this->newsService = new NewsService();
        $this->commentService = new CommentService();
    }

    // отображение страницы с блогом
    public function news(){
        $news = $this->newsService->getNews();
        $content = 'news.php';
        $data = ['title' => 'Новости',
                'news' => $news                  
    ];
    
        return $this->generateResponse($content, $data);
    }

     // отображение одной страницы блога
    public function showNewsById(Request $request) {
        $id = $request->params()['id'];
        $news = $this->newsService->getNewsById($id);
        $comment = $this->commentService->getCommentById($id);
        $content ='news-by-id.php';
        $data = [
            'page_title' => $news['news_header'],
            'news' => $news,
            'comment' => $comment,
        ];

        return $this->generateResponse($content, $data);
    }

    // отображаение формы добавления
    public function showNewNews(){
        $content = 'new-news.php';
        $data = ['title' => 'Добавить новость'];

        return $this->generateResponse($content, $data);
    }

    // добавление истории
    public function addNews(Request $request){
        $news_data = $request->post();
        $news_data['news_header'] =  $news_data['news_header'];
        $news_data['article'] =  $news_data['article'];
        $answer = $this->newsService->addNews($news_data) ?
        header('Location: /news') : 'Ошибка добавления';

        return $this->ajaxResponse($answer);
    }

    // public function addNews(Request $request){
        
    //     $news = $this->newsService->addNews($request->post());
    //     $content = 'new-news.php';
    //     $data = [
    //         'news' => $news
    //     ];

    //     return $this->generateResponse($content,$data);
    // }
  
    // отображение страницы редактирования
    public function showRedactionNewsById(Request $request) {
        $id = $request->params()['id'];
        $news = $this->newsService->getRedactionNewsById($id);
        $content ='redaction-news.php';
        $data = [
            'page_title' => $news['news_header'],
            'news' => $news
        ];

        return $this->generateResponse($content, $data);
    }

    // редактирование
    public function redactionNews(Request $request){
        $news_data = $request->post();
        $news_data['id_news'] =  $news_data['id_news'];
        $news_data['news_header'] =  $news_data['news_header'];
        $news_data['article'] =  $news_data['article'];
        $answer = $this->newsService->redactionNews($news_data) ?
        header('Location: /news') : 'Ошибка редактирования';

        return $this->ajaxResponse($answer);
    }
    
    // метод удаления 
    public function deleteNews(Request $request){
        $id = $request->params()['id'];
        $this->newsService->deleteNews($id);

        return header("Location: /news");
    }
}
