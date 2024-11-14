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
            <form action="index.php?action=register" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required minlength="5">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>

                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>

                <button type="submit">Register</button>
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
