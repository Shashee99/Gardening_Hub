<?php

class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function login()
    {

        //        check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//            Process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            //            Init data
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => ''
            ];

//            validate email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }
//            validate password
            if (empty($data['password'])) {
                $data['password_err'] = 'please enter password';
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must be at least 6 letters';
            }

//            Check for user/email
            if($this->userModel->findUserByEmail($data['email'])){
//                user found
            }else{
                $data['email_err']='No user found';
            }
// make sure all errors are empty

            if (empty($data['email_err']) && empty($data['password_err'])) {
//                Validate
//                Check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'],$data['password']);

                if($loggedInUser){
//                    create a session
                    $this->createUserSession($loggedInUser);
//                    die("success");

                }else{
                    $data['password_err']='Incorrect Password!';
                    $this->view('users/login',$data);
                }
            } else {
                $this->view('users/login', $data);
            }
//            $this->view('users/login', $data);

        } else {
//            Init data
            $data = [

                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''

            ];
        }
//        Load view
        $this->view('users/login', $data);

    }

    public function createUserSession($user){

        $_SESSION['user_id']= $user->user_id;
        $_SESSION['user_email']= $user->email;
        $_SESSION['user_name']= $user->user_name;
        $_SESSION['user_type']= $user->usertype;

        redirect('admin/home');


    }
    public function logout(){
        unset( $_SESSION['user_id']);
        unset( $_SESSION['user_email']);
        unset( $_SESSION['user_name']);
        unset( $_SESSION['user_type']);
        session_destroy();
        redirect('users/login');
    }

}