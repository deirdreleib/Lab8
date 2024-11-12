<?php
/*
 * Author: Deirdre Leib
 * Date: 11/12/24
 * File: user_controller.class.php
 * Description: The controller for managing user actions in the PeaPOD User Management system
 *
 */

class UserController {

    private UserModel $user_model;

    // Default constructor
    public function __construct() {
        // Create an instance of the UserModel class
        $this->user_model = new UserModel();
    }

    // Index action: display the registration form
    public function index(): void {
        $view = new Index();
        $view->display();
    }

    // Register a new user
    public function register(): void {
        $result = $this->user_model->add_user($_POST);

        // Display registration confirmation
        $view = new Register();
        $view->display($result);
    }

    // Display login form
    public function login(): void {
        $view = new Login();
        $view->display();
    }

    // Verify user credentials
    public function verify(): void {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = $this->user_model->verify_user($username, $password);

        $view = new VerifyUser();
        $view->display($result);
    }

    // Log out a user
    public function logout(): void {
        $this->user_model->logout();

        $view = new Logout();
        $view->display();
    }

    // Display the password reset form
    public function reset(): void {
        $view = new Reset();
        $view->display();
    }

    // Process password reset
    public function do_reset(): void {
        $username = $_POST['username'];
        $newPassword = $_POST['password'];

        $result = $this->user_model->reset_password($username, $newPassword);

        $view = new ResetConfirm();
        $view->display($result);
    }

    // Handle errors
    public function error($message): void {
        $error = new UserError();
        $error->display($message);
    }

    // Handle calling inaccessible methods
    public function __call($name, $arguments) {
        $this->error("Calling method '$name' caused an error. The route does not exist.");
    }
}

