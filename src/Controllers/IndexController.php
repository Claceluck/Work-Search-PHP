<?php

namespace Philip\Work\Controllers;

use Philip\Work\Base\Controller;

class IndexController extends Controller
{
    // метод отвечающий за отображение страницы /main
    public function main(){
        $content = 'main.php';
        $data = ['title' => 'Главная'];
        return $this->generateResponse($content, $data);
    }
}
