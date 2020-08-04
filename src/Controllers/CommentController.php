<?php

namespace Philip\Work\Controllers;

use Philip\Work\Base\Controller;
use Philip\Work\Base\Request;
use Philip\Work\Services\CommentService;

class CommentController extends Controller
{
    private $commentService;
    public function __construct()
    {
        $this->commentService = new CommentService();
    }
    
    // добавление истории
    public function addComment(Request $request){
        $comment_data = $request->post();
        $comment_data['comment_text'] =  $comment_data['comment_text'];
        $answer = $this->commentService->addComment($comment_data) ?
        header('Location: /news') : 'Ошибка добавления';

        return $this->ajaxResponse($answer);
    }

    // метод удаления 
    public function deleteComment(Request $request){
        $id = $request->params()['id'];
        $this->commentService->deleteComment($id);

        return header("Location: /news");
    }
}
