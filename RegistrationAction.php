
<?php



if ($_SERVER['REQUEST_METHOD'] == "POST")

{


    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    session_start();
    $isValid = true;

    if(empty($_POST["name"])) {
        
        $_SESSION['name_msg'] = "Please enter a name";
        $isValid = false;
        
                    
    } 
    
    if(empty($_POST["username"])) {
        
        $_SESSION['username_msg'] = "Please enter username";
        $isValid = false;
        
                    
    } 
    if(empty($_POST["email"])) {
        
        $_SESSION['email_msg'] = "Please enter email";
        $isValid = false;
        
                    
    } 

    if(empty($_POST["gender"])) {
        
        $_SESSION['gender_msg'] = "Please enter gender";
        $isValid = false;
        
                    
    } 

    if(empty($_POST["password"])) {
        
        $_SESSION['password_msg'] = "Please enter password";
        $isValid = false;
        
                    
    } 

    if(empty($_POST["dob"])) {
        
        $_SESSION['dob_msg'] = "Please enter dob";
        $isValid = false;
        
                    
    } 




    if ($isValid) 
    {
    	
		// Database connection
	$conn = new mysqli('localhost','root','','registration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name,username,email,gender,password,dob) values(?, ?, ?,?,?,?)");
		$stmt->bind_param("ssssss", $name,$username,$email,$gender,$password,$dob);
		$execval = $stmt->execute();
		echo "Registration successfull...";
		$stmt->close();
		$conn->close();
	}

     
    }

    else
    {
    	echo "here ";
    	
    	$_SESSION['msg'] = "Please fill up the form properly";
    	header("Location: Registration.php");
    }  

    
		}
		
 
 ?>