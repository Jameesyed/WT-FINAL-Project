<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head><style>
.error {color: #FF0000;}
</style>
</head>
<body>


<?php
// define variables and set to empty values
$nameErr  = $usernameErr = $emailErr = $genderErr = $passwordErr  = $dobErr  = $addErr =  "";
$name  = $username = $email = $password  = $gender =  $dob  = $add = "";
?>

<form method="post" action="RegistrationAction.php">
    <fieldset>
        <legend><h3>Resistration page</h3></legend>
        <b>Welcome Back!<b>
        <br><br>
        First name:<br>
        <input type="text"; id="name=" name="name"; placeholder= "Enter your name" >
        <?php echo isset($_SESSION['name_msg']) ? $_SESSION['name_msg'] : ""; ?><br><br>
        <span class="error">* <?php echo $nameErr;?> </span>
        <br>
        User name:<br>
        <input type="text"; id="username="; name="username"; placeholder= "Enter User name">
        <?php echo isset($_SESSION['username_msg']) ? $_SESSION['username_msg'] : ""; ?><br><br>
        <br>
        Email:<br>
        <input type="email"; id="email"; name="email"; placeholder= "Enter your mail address " >
        <?php echo isset($_SESSION['email_msg']) ? $_SESSION['email_msg'] : ""; ?><br><br>
        <span class="error">* <?php echo $emailErr;?></span>
        <br>
        Password:<br>
        <input type="password" id="password" name="password" placeholder= "Enter password" >
        <?php echo isset($_SESSION['password_msg']) ? $_SESSION['password_msg'] : ""; ?><br><br>
        <span class="error">* <?php echo $passwordErr;?></span>
         <br>
         
         Gender:<br>
         <input type="radio" id="gender"; name="gender" value="female">Female
         <input type="radio" id="male"; name="gender" value="male" >Male
         <?php echo isset($_SESSION['gender_msg']) ? $_SESSION['gender_msg'] : ""; ?><br><br>
         <span class="error">* <?php echo $genderErr;?></span>

         <br>
         Date of birth:<br>
        <input type="Date" id="dob" name="dob" placeholder= "Enter your Dob"  >
        <?php echo isset($_SESSION['dob_msg']) ? $_SESSION['dob_msg'] : ""; ?><br><br>
        <span class="error">* <?php echo $dobErr;?></span>
        <br>
       
    
        <input type="submit" name= "submit" value="Submit">
        <button type="button" class="cancelbtn">Cancel</button>
        <p>Already have an account?<a href="http://localhost/jameee/Login.php">Log in</a></p>
    
    </fieldset>
</form>


</body>
</html>