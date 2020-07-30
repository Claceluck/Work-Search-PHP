<?php

namespace Philip\Work\Controllers;

use Philip\Work\Base\Controller;
use Philip\Work\Base\Request;
use Philip\Work\Services\NewsService;

class NewsController extends Controller
{
    private $newsService;
    public function __construct()
    {
        $this->newsService = new NewsService();
    }

    // метод отвечающий за отображение страницы /news
    public function news(){
        $news = $this->newsService->getNews();
        $content = 'news.php';
        $data = ['title' => 'Новости',
                'news' => $news                  
    ];
    
        return $this->generateResponse($content, $data);
    }

    public function showNewsById(Request $request) {
        $id = $request->params()['id'];
        $news = $this->newsService->getNewsById($id);
        $content ='news-by-id.php';
        $data = [
            'page_title' => $news['news_header'],
            'news' => $news
        ];

        return $this->generateResponse($content, $data);
    }

    // метод отвечающий ща отображаения форм создания новости
    public function showNewNews(){
        $content = 'new-news.php';
        $data = ['title' => 'Добавить новость'];

        return $this->generateResponse($content, $data);
    }

    // добавляет новость в бд
    public function addNews(Request $request){
        $news_data = $request->post();
        $news_data['news_header'] =  $news_data['news_header'];
        $news_data['article'] =  $news_data['article'];
        $answer = $this->newsService->addNews($news_data) ?
        header('Location: /news') : 'Ошибка добавления';

        return $this->ajaxResponse($answer);
    }
    
    // метод удаления новости
    public function deleteNews(Request $request){
        $id = $request->params()['id'];
        $deleteNews = $this->newsService->deleteNews($id);
        $content = 'news.php';
        $data = [
            'delete_news' => $deleteNews
        ];

        return $this->generateResponse($content,$data);
    }
}
