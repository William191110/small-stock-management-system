<?php 
namespace Controllers;

class Feeds extends BaseController {

    protected mixed $output = [];

    public function Feeds()
    { 
    

        $data = [
            'page' => ucfirst($this->title(basename(__FILE__))),
            'items'  => $this->getData('feedback'),
        ];

          
    
        $this->view('pages/feeds', $data);
    }
    
}