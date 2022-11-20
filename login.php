<?php session_start();?>
<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversiontion</title>
    </head>
    <body>
   <form action="loginAction.php" method="post">
    <fieldset>
        <legend><h3>Login</h3></legend>
        <b>Welcome Back!<b>
        <br><br>
        Username:<br>
        <input type="email" name="email" id="email" placeholder= "Enter username">
        <?php echo isset($_SESSION['email_msg']) ? $_SESSION['email_msg'] : ""; ?> <br>
         Password:<br>
        <input type="Password" name="password" id="password" placeholder= "Enter your password" >
        <?php echo isset($_SESSION['password_msg']) ? $_SESSION['password_msg'] : ""; ?>
        <br><br>
        <input type="checkbox" id="remember me" name="remember me" value="remember me">
        <label for="remember me">Remember me next time</label><br><br>
        <input type="submit" value="Submit">
        <button type="button" class="cancelbtn">Cancel</button>
        <p>Don't have an account?<a href="http://localhost/jameee/signup.php">Sign up</a></p>
    </fieldset>
</form>

</body>
</html>
