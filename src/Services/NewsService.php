<?php

namespace Philip\Work\Services;

use Philip\Work\Base\DBConnection;
use Exception;

class NewsService
{
    const INSERT_SUCCESS = 'Новость успешно добалена';
    const INSERT_ERROR = 'Произошла ошибка при добавлении';

	private $dbConnection;
    public function __construct()
    {
        $this->dbConnection = DBConnection::getInstance();
	}

	public function addNews(array $news_data) {

        $news_sql ='INSERT INTO news(news_header, article ) 
	 				VALUES
					(:news_header, :article);';

        return $this->dbConnection->executeSql($news_sql, $news_data) ?
							self::INSERT_SUCCESS : self::INSERT_ERROR;
	}

}
							
	// public function addNews(array $news_data){

	// 	$news_header = $news_data['news_header'];
	// 	$article = $news_data['article'];

	// 	$news_sql ='INSERT INTO news(news_header, article ) 
	// 				VALUES
	// 				(:news_header, :article);';
	// 	try {
	// 		$this->dbConnection->getConnection()->beginTransaction();

	// 		$news_params = [
	// 				'news_header'=>$news_header,
	// 				'article'=>$article
	// 		];
	// 		$this->dbConnection->executeSql($news_sql, $news_params);

	// 		// подтверждение транзакции
	// 		// метод commit объекта PDO подтверждает транзакцию (данные записываются в таблицы)
	// 		$this->dbConnection->getConnection()->commit();
	// 		return self::INSERT_SUCCESS;

	// 	} 	catch (Exception $exception){

	// 		// откат транзакции (к методу beginTransaction) данные не будут добавлены
	// 		// метод rollBack объекта PDO откатыват транзакцию к вызову метода beginTransaction
	// 		$this->dbConnection->getConnection()->rollBack();
	// 		return self::INSERT_ERROR;
	// 	}
	// }
		