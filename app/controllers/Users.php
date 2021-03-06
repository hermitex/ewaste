<?php

/**
 * Users manages registration, login, logout
 */
class Users extends Controller
{
    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function userlist()
    {
        $users = $this->userModel->getUsers();
        $data = [
            'users' => $users
        ];

        $this->view('users/userlist', $data);
    }

    /**
     * Registers a user
     */
    public function register(){
        $data = [
            'firstName' => '',
            'lastName' => '',
            'email' => '',
            'phone' => '',
            'password' => '',
            'passwordError' => '',
            'confirmPasswordError' => '',
            'firstNameError' => '',
            'lastNameError' => '',
            'emailError' => '',
            'message' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'firstName' => trim($_POST['firstName']),
                'lastName' => trim($_POST['lastName']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'passwordError' => '',
                'confirmPasswordError' => '',
                'firstNameError' => '',
                'lastNameError' => '',
                'emailError' => '',
                'message' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            if (empty($data['firstName'])){
                $data['firstNameError'] = 'Please enter first name.';
            }elseif(!preg_match($nameValidation, $data['firstName'])){
                $data['firstNameError'] = 'Name can only be letters and numbers.';
            }

            if (empty($data['lastName'])){
                $data['lastNameError'] = 'Please enter last name.';
            }elseif(!preg_match($nameValidation, $data['lastName'])){
                $data['lastNameError'] = 'Name can only be letters and numbers.';
            }

            if (empty($data['email'])){
                $data['emailError'] = 'Please enter email.';
            }elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                $data['emailError'] = 'Enter the correct email format.';
            }else{
                if (!$this->userModel->findUserByEmail($data['email'])){
                    $data['emailError'] = 'The email entered is already registered.';
                }
            }

            //Validate password on length and numeric values
            if (empty($data['password'])){
                $data['passwordError'] = 'Please enter password.';
            }elseif (strlen($data['password']) < 8){
                $data['passwordError'] = 'Password must be at least 8 characters long.';
            }elseif (preg_match($passwordValidation, $data['password'])){
                $data['passwordError'] = 'Password must have at least 1 numeric value.';
            }
            //Validate confirm password
            if (empty($data['confirmPassword'])){
                $data['confirmPasswordError'] = 'Re-enter the password.';
            }else{
                if($data['password'] != $data['confirmPassword']){
                    $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
                //Empty the errors array
                if(empty($data['firstNameError']) && empty($data['lastNameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])){
                    //Hash passwords
//                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    //Register user form model function
                    if ($this->userModel->register($data)){
                        //Redirect the user to login page,
                        if ($this->userModel->insertUserDetails($data)){
                            header('location: '.URLROOT.'/users/login');
                        }else{
                            die("Something went wrong!");
                        }

                    }else{
                        die(('Something went wrong!'));
                    }
                }
            }
        }
        $this->view('users/register', $data);
    }


    /**
     *  Logins in a user
     */
    public function login()
    {
        $data = [
            'title' => 'Login Page',
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => '',
            'message' => ''
        ];

        // Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Sanitize the post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '',
                'message' => ''
            ];

            //Validate email
            if (empty($data['email'])){
                $data['emailError'] = 'Please enter your email.';
            }
            //Validate password
            if(empty($data['password'])){
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if there are no errors
            if (empty($data['emailError']) && empty($data['passwordError'])){
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if ($loggedInUser){
                    $this->createUserSession($loggedInUser);
                }else{
                    $data['passwordError'] = 'Password or email is incorrect. Please try again.';
                    $this->view('users/login', $data);
                }
            }
        }
        $this->view('users/login', $data);
    }


    /**
     * @param $user
     * Creates a user session
     */
    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->userlogin_userlogin_id;
        $_SESSION['email'] = $user->email;
        $_SESSION['first_name'] = $user->first_name;
        header('location:' . URLROOT . '/dashboards/dashboard');
    }



    /**
     * Logs out a user and terminates a session
     */
    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['email']);
        unset($_SESSION['first_name']);
        header('location:' . URLROOT . '/users/login');
    }
}