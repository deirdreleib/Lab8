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
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>

        <!--bottom row-->
        <div class="bottom-row">
            <span>Don't have an account? <a href="index.php?action=index">Register</a></span>

        </div>

        <?php
        //calls the footer method in the parent class
        parent::footer();
    }
}
