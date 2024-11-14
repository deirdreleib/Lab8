<?php
/*
 * Author: Deirdre Leib
 * Date: 11/12/24
 * Name: index.php
 * Description: Bootstrap file for routing user requests in the PeaPOD User Management system.
 */

//include code in vendor/autoload.php file
require_once ("vendor/autoload.php");

//create an object of UserController
$user_controller = new UserController();
//add your code below this line to complete this file

// Retrieve the 'action' query string parameter, defaulting to 'index' if not set
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$action_map = [
    'index' => 'index',
    'register' => 'register',
    'login' => 'login',
    'verify' => 'verify',
    'logout' => 'logout',
    'reset' => 'Reset',
    'do_reset' => 'do_reset',
    'error' => 'error'
];

// Check if the action exists in the action map; if it does, call the corresponding method
// Otherwise, default to the 'index' method
if (array_key_exists($action, $action_map)) {
    $method = $action_map[$action];
    $user_controller->$method();
} else {
    // Default to 'index' if the action is unrecognized
    $user_controller->index();
}


