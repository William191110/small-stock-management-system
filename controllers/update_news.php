<?php 
namespace Controllers;

class Update_news extends BaseController {

    protected mixed $output = [];

    public function Update_news()
    { 
    

        $this->post()->UpdateNews(); 
    
        $this->view('pages/update_news');
    }
    
}