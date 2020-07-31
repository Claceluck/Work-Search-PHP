<?php

namespace Philip\Work\Controllers;

use Philip\Work\Base\Controller;

class IndexController extends Controller
{
    // отображение главной страницы
    public function main(){
        $content = 'main.php';
        $data = ['title' => 'Главная'];
        
        return $this->generateResponse($content, $data);
    }
}
