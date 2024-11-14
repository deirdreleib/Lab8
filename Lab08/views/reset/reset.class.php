<?php
/**
 * Author: Ashley Rodriguez Vega
 * Date: 11/14/24
 * File: reset.class.php
 * Description: This class displays the password reset form, which allows users to enter their new password.
 */


class Reset extends View {
    public function display(): void {
        //calls the header method in the parent class
        parent::header();
        ?>

        <!--top row-->
        <div class="top-row">Reset Password</div>

        <!--middle row-->
        <div class="middle-row">
            <form action="index.php?action=do_reset" method="post">
                <div><input type="text" id="username" name="username" value="<?= $_COOKIE['username'] ?? ''; ?>" readonly required></div>
                <div><input type="password" name="password" style="width: 99%" required minlength="5" placeholder="Password, 5 characters minimum"></div>

                <div><input type="submit" class="button" value="register"></div>
            </form>
        </div>

        <?php
        //calls the footer method in the parent class
        parent::footer();
    }
}
