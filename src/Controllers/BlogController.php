<?php

namespace Philip\Work\Controllers;

use Philip\Work\Base\Controller;

class BlogController extends Controller
{
    // метод отвечающий за отображение страницы /blog
    public function blog(){
        $content = 'blog.php';
        $data = ['title' => 'Блог'];
        return $this->generateResponse($content, $data);
    }
}
