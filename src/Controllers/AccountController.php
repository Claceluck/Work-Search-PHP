<?php

namespace Philip\Work\Controllers;

use Philip\Work\Base\Controller;
use Philip\Work\Base\Request;
use Philip\Work\Services\AccountService;

class AccountController extends Controller
{
    private $accountService;
    public function __construct()
    {
        $this->accountService = new AccountService();
    }

    // /registration GET
    public function showRegForm(){
        $content = 'registration.php';
        $data = ['title' => 'Анкета и регистрация'];
        return $this->generateResponse($content, $data);
    }

    // регитрация пользователя /registration POST
    public function regUser(Request $request){
        //var_dump($request->post());
        $result = $this->accountService->addUser($request->post());
        $content = 'registration.php';
        $data = [
            'page_title'=>'Регистрация',
            'reg_result' => $result
        ];
        return $this->generateResponse($content,$data);
    }

    // метод, отвечающий за авторизацию /login POST
    public function login(Request $request){
        $auth_data = $request->post();
        // валидация
        $result = $this->accountService->auth($auth_data);
        if ($result == AccountService::AUTH_OK) {
            $_SESSION['email'] = $auth_data['email'];
        }
        return $this->ajaxResponse($result);
    }

    // метод отвечающий за выход /logout
    public function logout(){
        $_SESSION = [];
        header('Location: /');
    }
}
