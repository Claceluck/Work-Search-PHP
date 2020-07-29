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
        $content = 'news.php';
        $data = ['title' => 'Новости'];
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
            'Новость добавлена' : 'Ошибка добавления';
        return $this->ajaxResponse($answer);
    }
    
    // public function addNewNews(Request $request){
    //     // var_dump($request->post());
    //     $newsResult = $this->newsService->addNews($request->post());
    //     $content = 'new-news.php';
    //     $data = [
    //         'news_result' => $newsResult
    //     ];
    //     return $this->generateResponse($content,$data);

    // }
}
