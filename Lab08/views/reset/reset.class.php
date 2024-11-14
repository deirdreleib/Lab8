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
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?= $_COOKIE['username'] ?? ''; ?>" readonly required>

                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" required minlength="5">

                <button type="submit">Reset Password</button>
            </form>
        </div>

        <?php
        //calls the footer method in the parent class
        parent::footer();
    }
}
