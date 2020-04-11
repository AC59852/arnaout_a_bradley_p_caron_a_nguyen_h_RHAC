<?php 

require_once '../load.php';
$ip = $_SERVER['REMOTE_ADDR'];

if(isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(!empty($username) && !empty($password)) {

        $message = login($username, $password, $ip);
    }else {
        $message = 'Please fill out the username/password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <?php echo !empty($message)?$message: '' ?>
    <form class="loginForm" action="admin_login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" value="">

        <label for="password">Password:</label>
        <input type="password" name="password" value="">
        
        <button name="submit">Login</button>
    </form>
</body>
</html>