<?php 
namespace Controllers;

class Update extends BaseController {

    protected mixed $output = [];

    public function Update()
    { 
        

        if (isset($_GET['id'])) {

            $data['user'] = $this->getData__('users', 'id', array($_GET['id']));
        } 
        
        
        if (isset($_POST['update'])) {

            $formData = array($_POST['fname'], $_POST['lname'], $_POST['tof'], $_GET['id']);
            $this->UpdateUser('users', array('fname', 'lname', 'tof'), 'id', $formData);
            header("location:index.php?page=users");
        }



        $this->view('pages/update', $data);
    }
    
}