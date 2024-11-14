<?php
/**
 * Author: Ashley Rodriguez Vega
 * Date: 11/13/24
 * File: login.class.php
 * Description: This class displays the login form and handles user login.
 * It extends the View class and uses its header and footer methods.
 */


class Login extends View {
    public function display(): void {
        //calls the header method in the parent class
        parent::header();
        ?>

        <!--top row-->
        <div class="top-row">Login</div>

        <!--middle row-->
        <div class="middle-row">
            <form action="index.php?action=verify" method="post">
                <div><input type="text" name="username" style="width: 99%" required placeholder="Username"></div>
                <div><input type="password" name="password" style="width: 99%" required minlength="5" placeholder="Password, 5 characters minimum"></div>
                <div><input type="submit" class="button" value="register"></div>
            </form>
        </div>
        <div class="middle-row">
            <p>Please complete the entire form. All fields are required.</p>
            <form method="post" action="index.php?action=register">

            </form>
        <!--bottom row-->
        <div class="bottom-row">
            <span>Don't have an account? <a href="index.php?action=index">Login</a></span>

        </div>

        <?php
        //calls the footer method in the parent class
        parent::footer();
    }
}
