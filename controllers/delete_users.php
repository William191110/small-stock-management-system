<?php 
namespace Controllers;

class Delete_users extends BaseController {

    protected mixed $output = [];

    public function Delete_users()
    { 
        $data = [
            'page' => ucfirst($this->title(basename(__FILE__))),
            'items'  => $this->getData('users')
        ];

        if (isset($_GET['user'])) {
          
               $this->delete('users', 'email', array($_GET['user']));
               header("location:index.php?page=delete_users");
            }
        
        
    
        $this->view('pages/delete_users', $data);
    }
    
}