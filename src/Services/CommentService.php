<?php

namespace Philip\Work\Services;

use Philip\Work\Base\DBConnection;


class CommentService
{
    const COMMENT_SUCCESS = 'Коментарий успешно добален';
    const COMMENT_ERROR = 'Произошла ошибка при добавлении';


	private $dbConnection;
    public function __construct()
    {
        $this->dbConnection = DBConnection::getInstance();
	}

    public function addComment(array $comment_data) { 
        $sql = 'SELECT id_user FROM user WHERE email = :email'; 
        $user_id = $this->dbConnection->execute($sql, ['email'=>$_SESSION['email']], false); 
        $comment_data['id_user'] = $user_id['id_user']; 
 
        $comment_sql ='INSERT INTO comment(comment_text, id_news, id_user)  
                        VALUES (:comment_text, :id_news, :id_user);'; 
 
        return $this->dbConnection->executeSql($comment_sql, $comment_data) ? 
       self::COMMENT_SUCCESS : self::COMMENT_ERROR; 
    }

    public function getCommentById($id){
        $sql = 'SELECT * FROM comment
        WHERE id_news = :id;';
        $params = ['id' => $id];

        return $this->dbConnection->execute($sql, $params);
    }
    
    public function deleteComment($id){
        $sql = 'DELETE FROM comment WHERE id_comment = :id;';
        $params = ['id' => $id];
        
        return $this->dbConnection->executeSql($sql, $params, false);
    }
}
