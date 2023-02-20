<?php

class Users extends Controller
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function register()
    {
        // check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // process Form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);


            //init data 
            $data = [
                'fullName' => $_POST['fullName'],
                'numero' => trim($_POST['numero']),
                'adress' => $_POST['adress'],
                'ville' => trim($_POST['ville']),
                'userName' => trim($_POST['userName']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmation_password' => trim($_POST['confirmation_password']),
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
            ];


            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            } else {
                // Check email
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken';
                }
            }

            // validate Password 
            if (empty($data['password'])) {
                $data['password_err'] = 'please enter Password';
            } else {
                if (($data['confirmation_password']) !==  ($data['password'])) {
                    $data['confirm_password_err'] = 'The password not identical';
                }
            }

            if (empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                $this->userModel->addClient($data);
                header("Location: login ");
                //$this->view('users/login', $data);
            } else {
                $this->view('users/register', $data);
            }
        } else {
            // init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
            ];

            // load view
            $this->view('users/register', $data);
        }
    }

    public function login()
    {
        // check for Post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process Form 
            // sanitize POST DATA
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            // init data
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
                'check' => ($_POST['check']) ?? null, //if $_POST['check'] is not empty it will contain('on') a string if not it will be null

            ];
            //var_dump($data);

            // validate email 
            if (empty($data['email'])) {
                $data['email_err'] = 'please enter email';
            }
            // validate password 
            if (empty($data['password'])) {
                $data['password_err'] = 'please enter password';
            }

            // check for user / email

            // if ($this->userModel->findUserByEmail($data['email'])) {
            //     // User found


            // } else {
            //     //  User not Found
            //     $data['email_err'] = 'No user Found';
            // }


            // make sure errors empty

            if (empty($data['password_err'] && empty($data['email_err']))) {
                // validated
                // check ans set logged in user 
                if ($data['check']) {
                    if ($this->userModel->findUserByEmail($data['email'])) {
                        //is admin
                        $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                        if ($loggedInUser) {
                            // create session 
                            $this->createUserSession($loggedInUser);
                            $_SESSION['user_role'] = 'admin';
                            header('Location: http://localhost/electromaroc/Pages/dashboard');
                        } else {
                            $data['password_err'] = 'Password incorrect';
                            $this->view('users/login', $data);
                        }
                    } else {
                        $data['email_err'] = 'No user Found';
                        $this->view('users/login', $data);
                    }
                } else {
                    //is client
                    if ($this->userModel->findClientByEmail($data['email'])) {
                        $loggedInUser = $this->userModel->loginClient($data['email'], $data['password']);

                        if ($loggedInUser) {
                            // create session 
                            $this->createUserSession($loggedInUser);
                            $_SESSION['user_role'] = 'client';
                            header('Location: http://localhost/electromaroc/Pages/dashboardCmdUser');
                        } else {
                            $data['password_err'] = 'Password incorrect';
                            $this->view('users/login', $data);
                        }
                    } else {
                        $data['email_err'] = 'No user Found';
                        $this->view('users/login', $data);
                    }
                }
            } else {
                //load view with errors 
                $this->view('users/login', $data);
            }
        } else {
            // init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            // load view
            $this->view('users/login', $data);
        }
    }

    public function createUserSession($user)
    {

        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['role']);
        unset($_SESSION['user_role']);


        session_destroy();
        redirect('Pages/index');
    }
}
