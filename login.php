<?php session_start(); ?>
<?php

include 'pfolio/nav.php';


$userErr = $passErr = ""; $username = $password = "";
$errCount = 0;

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'templates/head.php';?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Login page</title>

  
    <script src="js/login.js"></script>
</head>

<body>
<?php include 'Header.php'; ?>

<form  action="../controller/LoginAction.php"  method="post" novalidate onsubmit="return isValid(this);">
<fieldset>
        <legend><h3>Login</h3></legend>
        <b>Welcome Back!<b>
        <br>
        Username:<br>
        <input type="text" name="username" placeholder= "Enter your Email" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
        <span class="error">* <?php echo $userErr;?></span>

        <br>
        Password:<br>
        <input type="password" name="password" placeholder= "Enter your password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
        <span class="error">* <?php echo $passErr;?></span>

    <br><br>
    <input type="checkbox" id="rmbm" name="rmbm" value="True">
        <label for="remember me">Remember me</label><br><br>


        <style>
            .button {
              background-color: #FFFFFF; 
              border: none;
              color: white;
              padding: 16px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 1600px;
              margin: 4px 2px;
              transition-duration: 0.4s;
              cursor: pointer;
            }

            .button1 {
              background-color: #3399FF; 
              color: black; 
              border: 12px solid #3399FF;
            }

            .button1:hover {
              background-color: #0080FF; 
              color: black; 
              border: 12.5px solid #0080FF;
            }

        </style>

        <input type="submit" name="submit" class="button1" value="Log in">
        <a href="http://localhost/jameee/signup.php" class="button1" ><span>Cancel</span></a></p><br>
        <a href="/MVC_AHMS/forgot.php"> <span>Forgot Password?</span> </a><hr>


        <style>
        .button {
          background-color: #4CAF50; /* Green */
          border: none;
          color: white;
          padding: 16px 16px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 12px;
          margin: 4px 2px;
          transition-duration: 0.4s;
          cursor: pointer;
        }

        button:hover {background-color: #e7e7e7;}

        .button {
          background-color: #66B2FF;
          color: #0000CC;
          border: 2px solid #555555;
        }

        .button:hover {
          background-color: #99CCFF;
          color: pink;
        }
        </style>

        <p>Don't have an account?<a href="http://localhost/mvc/view/Regestration.php" class="button">Sign up</a></p>

</form>
<?php echo isset($_SESSION['global_error_msg']) ? $_SESSION['global_error_msg'] : ""?>
</fieldset>


	<?php include 'Footer.php'; ?>

</body>
</html>
