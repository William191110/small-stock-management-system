<?php 
namespace Controllers;

class Information extends BaseController {

    protected mixed $output = [];

    public function Information()
    { 
        $this->post()->sign_in();
        $this->view('pages/information');
    }
    
}