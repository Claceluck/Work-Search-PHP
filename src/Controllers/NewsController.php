<?php

namespace Philip\Work\Controllers;

use Philip\Work\Base\Controller;

class NewsController extends Controller
{
    public function news(){
        $content = 'news.php';
        $data = ['title' => 'Новости'];
        return $this->generateResponse($content, $data);
    }
}
