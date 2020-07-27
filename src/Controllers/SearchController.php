<?php

namespace Philip\Work\Controllers;

use Philip\Work\Base\Controller;

class SearchController extends Controller
{
    public function search(){
        $content = 'questionnaire.php';
        $data = ['title' => 'Анкета'];
        return $this->generateResponse($content, $data);
    }
}
