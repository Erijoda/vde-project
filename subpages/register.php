<?php
$error['username'] = "";
$error['password'] = "";
$error['successful'] = "";

if (isset($_POST['register'])) {
    $_POST['username'] = trim($_POST['username']);
    if (empty($_POST['username'])) {
        $error['username'] = '<span class="error">Your username cannot be empty</span>';
    } elseif ($userService->isUsernameTaken($_POST['username'])) {
        $error['username'] = '<span class="error">The username is taken</span>';
    } elseif ($_POST['password'] !== $_POST['password2']) {
        $error['password'] = '<span class="error">The passwords don\'t match</span>';
    } elseif (empty($_POST['password'])) {
        $error['password'] = '<span class="error">Your password cannot be empty.</span>';
    } else {
        if ($userService->register($_POST['username'], $_POST['password'], $_POST['firstname'], $_POST['lastname'])) {
          $error['successful'] = '<span class="success">You\'ve registered! You can now log in.</span>';
          unset($_POST['register']);
          unset($_POST['username']);
          unset($_POST['password']);
          unset($_POST['firstname']);
          unset($_POST['lastname']);
        }
    }
}
?>
<div>
    <h1>Register</h1>
    <form method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php if (isset($_POST['register']) && isset($_POST['username'])) echo $_POST['username'];?>">
            <?php echo $error['username']; ?>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
            <?php echo $error['password']; ?>
        </div>
        <div>
            <label for="password2">Confirm password:</label>
            <input type="password" name="password2">
            <?php echo $error['password']; ?>
        </div>
        <div>
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname'];?>">
        </div>
        <div>
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname'];?>">
        </div>
        <input type="submit" name="register" value="Register"><?php echo $error['successful'];?>
    </form>
</div>