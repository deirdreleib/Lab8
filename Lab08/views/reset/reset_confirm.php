<?php
/**
 * Author: Ashley Rodriguez Vega
 * Date: 11/14/24
 * File: reset_confirm.php
 * Description: This class displays a confirmation message after a password reset attempt.
 */

class ResetConfirm extends View {
    public function display($result): void {
        //calls the header method in the parent class
        parent::header();
        ?>

        <!--top row-->
        <div class="top-row">Password Reset Confirmation</div>

        <!--middle row-->
        <div class="middle-row">
            <?php
            //this will check the result and assign a message accordingly
            if ($result) {
                $message = "Password reset successful!";
            } else {
                $message = "An error occurred while resetting your password. Please try again.";
            }
            ?>
            <p><?= $message ?></p>
        </div>

        <!--bottom row-->
        <div class="bottom-row">
            <?php
            //this will display a message based on the result
            if ($result): ?>
                <span><a href="index.php?action=login">Login</a></span>
            <?php else: ?>
                <span><a href="index.php?action=reset">Try Again</a></span>
            <?php endif; ?>
        </div>

        <?php
        //calls the footer method in the parent class
        parent::footer();
    }
}



