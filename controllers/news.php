<?php 
namespace Controllers;

class News extends BaseController {

    protected mixed $output = [];

    public function News()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__))),
            'items'  => $this->getData('news'),
        ];

        $this->post()->sign_in();
        $this->view('pages/news', $data);
    }
    
}