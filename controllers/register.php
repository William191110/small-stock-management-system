<?php 
namespace Controllers;

class Register extends BaseController {

    protected mixed $output = [];

    public function Register()
    { 
        $this->post()->sign_up();
        $this->view('pages/register');
    }
    
}