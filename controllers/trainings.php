<?php 
namespace Controllers;

class Trainings extends BaseController {

    protected mixed $output = [];

    public function Trainings()
    { 
        $this->post()->sign_in();
        $this->view('pages/trainings');
    }
    
}