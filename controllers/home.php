<?php 
namespace Controllers;

class Home extends BaseController {

    protected mixed $output = [];

    public function Home()
    { 
    //     $data = [
    //         'page' => ucfirst($this->title(basename(__FILE__))),
    //         'items'  => $this->selectlimit('products', 'type', ['latest'], 3, 0),
    //         'header' => 'Home Gym Equipment',
    //         'msg' => 'Hi, Guest',
    //         'btn' => TRUE,
    //     ];

        if (isset($_POST['search'])) {
            
            $fetch = $this->find($_POST['value']);

            $data['user'] = $fetch;
            
        }  
    
        $this->view('pages/home', $data);
    }
    
}