<?php
/**
 * Author: Ashley Rodriguez Vega
 * Date: 11/13/24
 * File: register.class.php
 * Description: This class displays a registration confirmation message.
 * It shows whether the user registration was successful or not.
 */

class Register extends View {
    public function display($result): void {
        //calls the header method in the parent class
        parent::header();
        ?>

        <!--top row-->
        <div class="top-row">Registration Confirmation</div>

        <!--middle row-->
        <div class="middle-row">
            <?php
            //this will display appropriate message based on the result
            if ($result) {
                $message = "Your account has been successfully created!";
            } else {
                $message = "An error has occurred. Please try again.";
            }
            ?>
            <p><?= $message ?></p>
        </div>

        <!--bottom row-->
        <div class="bottom-row">
            <?php
            //this checks if the registration was successful and shows the links
            if ($result):?>
                <span><a href="index.php?action=login">Login</a></span>
            <?php
            else:?>
                <span><a href="index.php?action=index">Try Again</a></span>
            <?php endif;
            ?>
        </div>

        <?php
        //calls the footer method in the parent class
        parent::footer();
    }
}

