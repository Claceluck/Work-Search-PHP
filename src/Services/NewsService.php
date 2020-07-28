<?php

namespace Philip\Work\Services;

use Philip\Work\Base\DBConnection;

class NewsService
{
    const INSERT_SUCCESS = 'Новость успешно добалена';
    const INSERT_ERROR = 'Произошла ошибка при добавлении';

	private $dbConnection;
    public function __construct()
    {
        $this->dbConnection = DBConnection::getInstance();
	}

	public function addNews(array $news_data){
		$sql = 'INSERT INTO news 
		(news_header, article )
		values
		(:news_header, :article);';
		return $this->dbConnection->executeSql($sql, $news_data) ? self::INSERT_SUCCESS : self::INSERT_ERROR;
	}

}
