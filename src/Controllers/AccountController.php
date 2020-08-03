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

    // отображение регестрации
    public function showRegForm(){
        $content = 'registration.php';
        $data = ['title' => 'Анкета и регистрация'];
        
        return $this->generateResponse($content, $data);
    }

    // регитрация
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

    // авторизацию
    public function login(Request $request){
        $auth_data = $request->post();
        // валидация
        $result = $this->accountService->auth($auth_data);
        if ($result == AccountService::AUTH_OK) {
            $_SESSION['email'] = $auth_data['email'];
        }

        return $this->ajaxResponse($result);
    }

    // выход
    public function logout(){
        $_SESSION = [];
        header('Location: /');
    }

    // личный кабинет
    public function getAccountById(Request $request) {
        $email = $request->params()['email'];
        $userAccount = $this->accountService->getAccountById($email);
        $content ='personal-area.php';
        $data = [
            'userAccount' => $userAccount
        ];

        return $this->generateResponse($content, $data);
    }

    public function getAccountInfoById(Request $request) {
        $id_info = $request->params()['id_info'];
        $userInfo = $this->accountService->getAccountInfoById($id_info);
        $content ='personal-area-info.php';
        $data = [
            'userInfo' => $userInfo
        ];

        return $this->generateResponse($content, $data);
    }
}
