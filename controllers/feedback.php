<?php 
namespace Controllers;

class Feedback extends BaseController {

    protected mixed $output = [];

    public function Feedback()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__))),
            'items'  => $this->getData('news'),
        ];


        $this->post()->feedback();

        $this->view('pages/feedback', $data);
    }
    
}