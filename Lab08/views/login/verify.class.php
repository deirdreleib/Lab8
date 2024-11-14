<?php
/**
 * Author: Ashley Rodriguez Vega
 * Date: 11/14/24
 * File: verify.class.php
 * Description: This class displays a message based on the login result.
 * It checks if the login was successful and shows a relevant message with options to log out or try again.
 */

class Verify extends View {
    public function display($result): void {
        //calls the header method in the parent class
        parent::header();
        ?>

        <!--top row-->
        <div class="top-row">Login Confirmation</div>

        <!--middle row-->
        <div class="middle-row">
            <?php
            //this will check the result and assign a message accordingly
            if ($result) {
                $message = "Login successful!";
            } else {
                $message = "Invalid username or password.";
            }
            ?>
            <p><?= $message ?></p>
        </div>

        <!--bottom row-->
        <div class="bottom-row">
            <?php
            //this will display appropriate message based on the result
            if ($result): ?>
                <span><a href="index.php?action=logout">Logout</a></span>
            <?php else: ?>
                <span><a href="index.php?action=login">Try Again</a></span>
            <?php endif; ?>
        </div>

        <?php
        //calls the footer method in the parent class
        parent::footer();
    }
}
