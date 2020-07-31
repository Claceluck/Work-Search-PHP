<?php

namespace Philip\Work\Controllers;

use Philip\Work\Base\Controller;

class BlogController extends Controller
{
    // отображение страницы 
    public function blog(){
        $content = 'blog.php';
        $data = ['title' => 'Блог'];
        
        return $this->generateResponse($content, $data);
    }
}
