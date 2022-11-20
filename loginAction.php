<?php


if ($_SERVER['REQUEST_METHOD']=== "POST") {

    session_start();
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);
     $isValid true;
    if (empty($email)) {
        $_SESSION['email_msg'] = "Email cannot be empty";
        $isValid = false;
    }
    if (empty($password)) {
        $_SESSION['password_msg'] = "password cannot be empty"
        $isvalid = false;
    }
    if ($isValid === true) {
    $isValid=false;
    $conn = mysqli_connect("localhost", "root", "", "login", 3306);

    if (!$conn) {
        die("Connection failed:" . mysqli_connect_error());
    }

        $stmt= mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, "SELECT id, email, password FROM User WHERE email
        = ? and password = ?");
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_bind_result($stmt, $id, $em, $pa);
        mysqli_stmt_fetch($stmt);
if ($em === $email and $pa === $password)
 {
    $isValid = true;
 }
 else{
    $_SESSION['global_msg'] = "No record's found. please contact with
    adminstrator";
    header("Location: login.php");
    }
 }
}

?>


