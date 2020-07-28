<?php

namespace Philip\Work\Controllers;

use Philip\Work\Base\Controller;

class NewsController extends Controller
{
    // метод отвечающий за отображение страницы /news
    public function news(){
        $content = 'news.php';
        $data = ['title' => 'Новости'];
        return $this->generateResponse($content, $data);
    }
}
