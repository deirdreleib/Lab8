<?php
/**
 * Author: Ashley Rodriguez Vega
 * Date: 11/13/24
 * File: index.class.php
 * Description: This class displays the user registration form. It extends the View class and provides the page structure for new users to sign up.
 */

class Index extends View {
    public function display(): void {
        //calls the header method in the parent class
        parent::header();
        ?>

        <!--top row - includes the title-->
        <div class="top-row">Register</div>

        <!--middle row with the form-->
        <!--allows  the user to enter username, password, email...-->
        <div class="middle-row">
            <p>Please complete the entire form. All fields are required.</p>
            <form method="post" action="index.php?action=register">
                <div><input type="text" name="username" style="width: 99%" required placeholder="Username"></div>
                <div><input type="password" name="password" style="width: 99%" required minlength="5" placeholder="Password, 5 characters minimum"></div>
                <div><input type="email" name="email" style="width: 99%" required="" placeholder="Email"></div>
                <div><input type = 'text' name="fname" style="width: 99%" required placeholder="First name"></div>
                <div><input type="text" name="lname" style="width: 99%" required placeholder="Last name"></div>
                <div><input type="submit" class="button" value="register"></div>
            </form>
        </div>

        <!--bottom row-->
        <div class="bottom-row">
            <span>Already have an account? <a href="index.php?action=login">Login</a></span>
        </div>

        <?php
        //calls the footer method in the parent class
        parent::footer();
    }
}
