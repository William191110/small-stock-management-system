<?php 
namespace Controllers;

class Login extends BaseController {

    protected mixed $output = [];

    public function Login()
    { 
        $this->post()->sign_in();
        $this->view('pages/login');
    }
    
}