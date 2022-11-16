<?php 
namespace Controllers;

class PostHandler extends BaseController {
    
    public function contactUs()
    {
        if(isset($_POST['contact'])) {
            
            $this->VALIDATE_STRING($_POST['name'], 'name');
            $this->VALIDATE_EMAIL($_POST['email']);
            $this->VALIDATE_STRING($_POST['subject'], 'subject');
            $this->VALIDATE_STRING($_POST['message'], 'message');

            if (count($this->data) == 4) {

                if ($this->insertData('contact_us', ['name', 'email', 'subject', 'message'], 
                                      $this->data) == true) {

                    $this->output = [

                                'alert' => 1,
                                'text' => 'Successfully Sent',
                                'icon' => 'success',
                                'timer' => 2500
                    ];

                } else {

                    $this->output = [

                                'alert' => 1,
                                'text' => 'Failed to send, please try again later',
                                'icon' => 'error',
                                'timer' => 3000
                    ];

                }

            } else {

                $this->output = $this->error;
            }
        }
    }


    public function sign_up()
    {
        if(isset($_POST['register'])){

            $db_data = $this->getData('users');

            $key = array_search($_POST['email'],array_column($db_data,'email'));

            if (gettype($key)=='boolean') {

                $user = [
                    
                    $_POST['fname'],
                    $_POST['lname'],
                    $_POST['tof'],
                    $_POST['location'],
                    $_POST['contact'],
                    $_POST['email'],
                    $_POST['password'], 1];

                $this->insertData('users',
                                  array('fname','lname','tof','location','contact','email','password', 'user_type'),
                                $user);
                sleep(3);
                header("location:index.php?page=login");;   
            

            } else{

                echo '<script>alert("Email already exist")</script>';

            }
            
        }
    }

    public function sign_in()
    {
        if(isset($_POST['login'])){

            $db_data = $this->getData('users');

            $key = array_search($_POST['email'],array_column($db_data,'email'));

            if (gettype($key)=='boolean') {

                    echo '<script>alert("Email does not exist")</script>';               

            } else{
                
                if($_POST['password'] == $db_data[$key]->password)
                {   
                    $this->grant_access('home', $db_data[$key]->fname);   
                }

            }
            
        }
        
    }

    public function feedback()
    {
        if (isset($_POST['feedback'])) {
            
            $this->insertData('feedback', array('email', 'msg'),array($_SESSION['user'], $_POST['msg']));
            echo '<script>alert("Feedback Successfully sent.")</script>';
        }
    }

    public function UpdateNews()
    {
        if (isset($_POST['updateNews'])) {
            
            $this->insertData('news', array('head', 'info'),array($_POST['head'], $_POST['info']));
            echo '<script>alert("News Successfully updated.")</script>';
        }
    }
}