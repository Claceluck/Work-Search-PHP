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

        $comment_sql ='INSERT INTO comment(comment_text) 
                        VALUES (:comment_text);';

        return $this->dbConnection->executeSql($comment_sql, $comment_data) ?
							self::COMMENT_SUCCESS : self::COMMENT_ERROR;
    }
}
