<?php 
namespace Controllers;

class Users extends BaseController {

    protected mixed $output = [];

    public function Users()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__))),
            'items'  => $this->getData('users')
        ];
        $this->view('pages/users', $data);
    }
    
}