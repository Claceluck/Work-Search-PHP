<?php

namespace Philip\Work\Services;

use Philip\Work\Base\DBConnection;


class NewsService
{
    const INSERT_SUCCESS = 'Новость успешно добалена';
    const INSERT_ERROR = 'Произошла ошибка при добавлении';
    const DELETE_SUCCESS = 'Новость успешно удалена';
    const DELETE_ERROR = 'Ошибка при удалении';

	private $dbConnection;
    public function __construct()
    {
        $this->dbConnection = DBConnection::getInstance();
	}

	public function getNews(){
        $sql = 'SELECT * FROM news';
        
        return $this->dbConnection->queryAll($sql);
    }

	public function getNewsById($id){
        $sql = 'SELECT * FROM news
        WHERE id_news = :id;';
        $params = ['id' => $id];

        return $this->dbConnection->execute($sql, $params, false);
	}
	
	public function addNews(array $news_data) {

        $news_sql ='INSERT INTO news(news_header, article ) 
	 				VALUES
					(:news_header, :article);';

        return $this->dbConnection->executeSql($news_sql, $news_data) ?
							self::INSERT_SUCCESS : self::INSERT_ERROR;
    }
    
    public function getRedactionNewsById($id){
        $sql = 'SELECT * FROM news
        WHERE id_news = :id;';
        $params = ['id' => $id];

        return $this->dbConnection->execute($sql, $params, false);
	}

    public function redactionNews(array $news_data) {
        $sql ='UPDATE  news 
                SET news_header = :news_header, article = :article
                WHERE id_news = :id_news;';
        
        return $this->dbConnection->executeSql($sql, $news_data) ?
							self::INSERT_SUCCESS : self::INSERT_ERROR;
    }
    
    public function deleteNews($id){
        $sql = 'DELETE FROM news WHERE id_news = :id;';
        $params = ['id' => $id];
        
        return $this->dbConnection->executeSql($sql, $params, false);
    }
}
		