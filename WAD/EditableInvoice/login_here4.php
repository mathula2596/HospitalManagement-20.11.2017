 <?php

session_start();
$error=''; // Variable To Store Error Message
if (isset($_POST['log'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Enter the valid Username or Password!!!...";
}
else
{
$username = $_POST['username'];
$password = $_POST['password'];


  $connect = mysql_connect("localhost","root","") or die ("Could not connect to the database");
  
	
	
	
	$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

  $db= mysql_select_db("health_care") or die ("Could not find database");
	
  $query = mysql_query("SELECT * FROM login WHERE username='$username' && password='$password'",$connect);
  
  $numrows = mysql_num_rows($query);
 
 
	
	
	if($numrows!==0){
		
		$query1 = mysql_query("SELECT position FROM login WHERE username='$username' && password='$password'",$connect);
		$row = mysql_fetch_assoc($query1);
     $_SESSION['pos']=$row['position'];
		
	
	if($_SESSION['pos']=="admin" || $_SESSION['pos']=="Admin" || $_SESSION['pos']=="ADMIN"  ){
		 //header('Location: C:\xampp\htdocs\Login_own\Login_admin.png');
		$_SESSION['login_user']=$username;
		
				//header('Location: DoctorReg.php');
		//header('Location:prop.php');
		header('Location: dash.php');
	
	}
	else if($_SESSION['pos']=="doctor" ||$_SESSION['pos']=="Doctor" || $_SESSION['pos']=="DOCTOR"){
	  //header('Location: C:\xampp\htdocs\Login_own\3_Doctor.jpg');

$_SESSION['login_user']=$username;
		
		//header('Location: Adminhome.php');
		header('Location: Template.php');
		
	
	}
	else if($_SESSION['pos']=="reception" || $_SESSION['pos']=="Reception" || $_SESSION['pos']=="RECEPTION" ){
	
	$_SESSION['login_user']=$username;
		
				
		header('Location: DoctorReg.php');
		//header('Location: Template.php');
	}
	}
	
	else{

		echo '<script type="text/javascript"> alert("Enter the valid Username or Password!!!..."); window.location.href="home.php";</script>';

	 //header('Location: C:\xampp\htdocs\Login_own\3_Doctor.jpg');

	}
	mysql_close($connect); // Closing Connection
 
}

}



?>
