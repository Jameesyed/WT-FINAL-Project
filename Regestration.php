<?php

session_start();
include 'pfolio/head.php';
include 'pfolio/nav.php';
// define variables and set to empty values
$nameErr = $emailErr = $degreeErr = $genderErr = $userErr = $passErr = $confrmPassErr = $dobErr = "";
$name = $email = $gender = $username = $password = $cnfrmPass = "";
$dob = $successmsg = "";
$dobdd = $dobmm = $dobyy = ""; $errCount = 0; $message = ''; $error = '';
?>
 




<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <script src="js/reg.js"></script>
    <h3 align="">Register a New Account</h3><br />
    <fieldset>
    <form method="post" action="RegestrationAction.php" enctype="multipart/form-data" novalidate onsubmit="return isValid(this);"> 

        <?php
        if(isset($error))
        {
            echo $error;
        }
        ?>
        <br />
        Name
        <input type="text" name="name" placeholder=" Atleast two words" class="form-control" value="<?php echo $name;?>" /> <br/>
        <span class="error">* <?php echo $nameErr;?></span>

        <?php echo isset($_SESSION['name_err_msg']) ? $_SESSION['name_err_msg'] : "" ?>

    <br><br>
        E-mail
        <input type="text" name = "email" placeholder="something@gmail.com" class="form-control" value="<?php echo $email;?>" /><br />
        <span class="error">* <?php echo $emailErr;?></span>
        <?php echo isset($_SESSION['email_err_msg']) ? $_SESSION['email_err_msg'] : "" ?>

    <br><br>

         User Name
        <input type="text" name = "username" placeholder="Don't use specialchars" class="form-control" value="<?php echo $username;?>" /><br />
        <span class="error">* <?php echo $userErr;?></span>
        <?php echo isset($_SESSION['username_err_msg']) ? $_SESSION['username_err_msg'] : "" ?>

    <br><br>

        Password
        <input type="password" name = "password" placeholder="8CharUpLowNumSpChar" class="form-control" /><br />
        <span class="error">* <?php echo $passErr;?></span>
        <?php echo isset($_SESSION['password_err_msg']) ? $_SESSION['password_err_msg'] : "" ?>

    <br><br>
        Confirm Password
        <input type="password" name = "cnfrmPass" placeholder="Same as passwordfield" class="form-control" /><br />
        <span class="error">* <?php echo $confrmPassErr;?></span>
        <?php echo isset($_SESSION['cnfrmPass_err_msg']) ? $_SESSION['cnfrmPass_err_msg'] : "" ?>

    <br><br>

        
            <legend>Gender</legend>  <span class="error">* <?php echo $genderErr;?></span>
            <input type="radio" id="male" name="gender" value="male" <?php if ($gender === 'male'){ echo 'checked';}?> >
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" <?php if ($gender === 'female'){ echo 'checked';}?> >
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other" <?php if ($gender === 'other'){ echo 'checked';}?> >
            <label for="other">Other</label><br>
            <?php echo isset($_SESSION['gender_err_msg']) ? $_SESSION['gender_err_msg'] : "" ?>


            <legend>Date of Birth:</legend>  <span class="error">* <?php echo $dobErr;?></span>
            <input type="date" name="dob" value="<?php echo $dob;?>"> <br><br>
       
        <?php echo isset($_SESSION['dob_err_msg']) ? $_SESSION['dob_err_msg'] : "" ?>







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


        <input type="submit" name="submit" class="button1" value="Register" class="btn btn-info" /><br />

    </form>
    </fieldset>
</div>
<br />
</div>
</body>
<?php include 'pfolio/footer.php';?>
</html>
