<?php
/**
 * Author: Kierra White
 * Date: 11/11/2024
 * File: user_model.class.php
 * Description: This class handles user data interactions with the database
 */

class UserModel {
    Private Database $db; //database object
    Private mysqli $dbConnection; //database connection object

    public function __construct() {
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
    }
    //Adding user method
    public function add_user($username, $password, $email, $firstName, $lastName)
    {
        //hashing the password
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        //SQL insert statement
        $sql = "INSERT INTO " . $this->db->getUserTable() . "(username, password, email,firstname, lastname) 
                VALUES ('$username', '$hashPassword', '$email', '$firstName', '$lastName')";

        //execute the query
        $query = $this->dbConnection->query($sql);

        //return if true
        if ($query === true){
            return true;
        }
        return false;
    }

    //Verify user method
    public function verify_user($username, $password)
    {
        //SQL select statement
        $sql = "SELECT * FROM " . $this->db->getUserTable() . " WHERE username ='$username'";

        //execute the query
        $query = $this->dbConnection->query($sql);

        //check if user exist
        if ($query && $query->num_rows > 0){
            $row = $query->fetch_assoc();
            $hashPassword = $row['password'];

            //verify password
            if (password_verify($password, $hashPassword)){

                //Create Cookie
                setcookie("username", $username, time() +3600, "/");
                return true;
            }
        }
        return false;
    }
    //logout method
    public function logout()
    {
        //Check if the cookie is still there and delete it
        if(!isset($_COOKIE ['username'])) {
            //Delete the cookie
            setcookie("username", "", time() - 3600, "/");
            return true;
        }
        return false;
    }

    //reset password method
    public function reset_password($username, $newPassword)
    {
        //hashing the new password
        $hashPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        //SQL update statement
        $sql = " UPDATE " . $this->db->getUserTable() .
            " SET password = '$hashPassword' WHERE username = '$username'";

        //execute the query
        $query = $this->dbConnection->query($sql);

        //return if true
        if ($query === true){
            return true;
        }
            return false;

    }

}