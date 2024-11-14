<?php
/**
 * Author: Ashley Rodriguez Vega
 * Date: 11/14/24
 * File: logout.class.php
 * Description: This class handles user logout. It displays a message after the user has logged out
 */
class Logout extends View {
    public function display(): void {
        //calls the header method in the parent class
        parent::header();
        ?>
        <!--top row-->
        <div class="top-row">Logout</div>

        <!--middle row-->
        <div class="middle-row">
            <p>You have been successfully logged out.</p>
        </div>
        <!--bottom row-->
        <div class="bottom-row">
            <span><a href="index.php?action=login">Login Again</a></span>
            <span><a href="index.php?action=index">Home</a></span>

        </div>
        <?php
        //calls the footer method in the parent class
        parent::footer();
    }
}