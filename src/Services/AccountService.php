<?php

namespace Philip\Work\Services;

use Philip\Work\Base\DBConnection;
use Exception;

class AccountService
{
    const REGISTRATION_SUCCESS = 'Регистрация прошла успешно';
    const REGISTRATION_ERROR = 'Ошибка регистрации';
	const USER_EXISTS = 'Пользователь с таким логином уже существует';
	
    const AUTH_ERROR_PWD = 'Ошибка при в воде пароля';
    const AUTH_ERROR_NAME = 'Ошибка в имени пользователя';
    const AUTH_OK = 'Авторизация прошла успешно';

    private $dbConnection;
    public function __construct()
    {
        $this->dbConnection = DBConnection::getInstance();
    }

    public function addUser(array $reg_data){

        // TODO:: Валидация!!!
        //        [
        //          'email'=> '',
        //          'password' => '',
        //          'name'=> '',
        //          'phone'=>
        //        ]

        // заносим данные в бд
        $email = $reg_data['email'];
        if ($this->getUser($email)) return self::USER_EXISTS;
        $pwd = $reg_data['password']; // qwerty123
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);

        $user_sql = 'INSERT INTO user(email, hash) 
                        VALUES (:user_email, :user_password)';
        $user_info_sql = 'INSERT INTO user_info (
            user_name, user_last_name, gender,
            user_age, user_phone, user_country,
            user_city, user_laungue, user_laungue_ex,
            user_laungue_hear, user_laungue_read, user_laungue_lett,
            user_laungue_talk, user_education, user_profession,
            user_exp_prof_aboard, user_additional_Info, id_user) 
                        VALUES (
            :user_name, :user_last_name, :gender,
            :user_age, :user_phone, :user_country,
            :user_city, :user_laungue, :user_laungue_ex,
            :user_laungue_hear, :user_laungue_read, :user_laungue_lett,
            :user_laungue_talk, :user_education, :user_profession,
            :user_exp_prof_aboard, :user_additional_Info, :id_user)';
        try {
            // начало транзакции
            // метод beginTransaction объекта PDO открывает транзакцию
            $this->dbConnection->getConnection()->beginTransaction();
            $user_params = [
                'user_email'=>$email,
                'user_password'=>$pwd
            ];
            $this->dbConnection->executeSql($user_sql, $user_params);

            $user_info_params = [
                'user_name' => $reg_data['name'],
                'user_last_name' => $reg_data['last_name'],
                'gender' => (int)$reg_data['gender'],
                'user_age' => $reg_data['age'],
                'user_phone' => $reg_data['phone'],
                'user_country' => $reg_data['country'],
                'user_city' => $reg_data['city'],
                'user_laungue' => $reg_data['laungue'],
                'user_laungue_ex' => (int)$reg_data['laungue_ex'],
                'user_laungue_hear' => $reg_data['laungue_hear'],
                'user_laungue_read' => $reg_data['laungue_read'],
                'user_laungue_lett' => $reg_data['laungue_lett'],
                'user_laungue_talk' => $reg_data['laungue_talk'],
                'user_education' => $reg_data['education'],
                'user_profession' => $reg_data['profession'],
                'user_exp_prof_aboard' => $reg_data['exp_prof_aboard'],
                'user_additional_Info' => $reg_data['additional_Info'],
                'id_user' => $this->dbConnection->getConnection()->lastInsertId()
            ];
            $this->dbConnection->executeSql($user_info_sql, $user_info_params);
            // подтверждение транзакции
            // метод commit объекта PDO подтверждает транзакцию (данные записываются в таблицы)
            $this->dbConnection->getConnection()->commit();
            return self::REGISTRATION_SUCCESS;
        } catch (Exception $exception){
            // откат транзакции (к методу beginTransaction) данные не будут добавлены
            // метод rollBack объекта PDO откатыват транзакцию к вызову метода beginTransaction
            $this->dbConnection->getConnection()->rollBack();
            return self::REGISTRATION_ERROR;
        }
    }

    // авторизация пользователя
    public function auth(array $auth_data){
        $email = $auth_data['email'];
        $pwd = $auth_data['password'];
        $user = $this->getUser($email);
        if (!$user) return self::AUTH_ERROR_NAME;

        if (!password_verify($pwd, $user['hash'])) {
            return self::AUTH_ERROR_PWD;
        }
        return self::AUTH_OK;
    }

    // проверка на наличие пользователя по email
    private function getUser($email){
        $sql = 'SELECT * FROM user WHERE email = :email';
        $user = $this->dbConnection->execute(
            $sql,
            ['email' => $email],
            false
        );
        return $user;
    }
}