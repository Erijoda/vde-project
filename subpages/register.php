<?php
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
}
?>
<div>
    <h1>Register</h1>
    <form method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo $_POST['username'];?>">
            <?php
            if (isset($_POST['register']) && empty($username)) {
                echo '<span class="error">You must supply a username.</span>';
            }
            if (isset($_POST['register']) && $username_taken) {
                echo '<span class="error">The username is already taken.</span>';
            }
            ?>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
            <?php
            if (isset($_POST['register']) && ($_POST['password'] != $_POST['password2'])) {
                echo '<span class="error">The passwords does not match.</span>';
            }
            if (isset($_POST['register']) && empty($_POST['password'])) {
                echo '<span class="error">You must supply a password.</span>';
            }
            ?>
        </div>
        <div>
            <label for="password2">Confirm password:</label>
            <input type="password" name="password2">
            <?php
            if (isset($_POST['register']) && ($_POST['password'] != $_POST['password2'])) {
                echo '<span class="error">The passwords does not match.</span>';
            }
            if (isset($_POST['register']) && empty($_POST['password'])) {
                echo '<span class="error">You must supply a password.</span>';
            }
            ?>
        </div>
        <div>
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname'];?>">
        </div>
        <div>
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname'];?>">
        </div>
        <input type="submit" name="register" value="Register">
    </form>
</div>