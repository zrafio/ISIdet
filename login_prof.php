<?php 
session_start(); 
include "dataconnection.php";

$user=$_POST['username'];
//$_SESSION['email']=$user;
$pass=$_POST['password'];

if (isset($user) && isset($pass)) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	echo $pass;
	echo $user;	
	echo "hello";

	/*$username = validate($_POST['username']);
	$pass = validate($_POST['password']);*/

	/*if (empty($user)) {
		header("Location: index.php?log=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?log=Password is required");
	    exit();
	}else{*/
		
		// hashing the password
		//$newpass = password_hash($pass, PASSWORD_DEFAULT); 
		
        
		$sql1 = "SELECT * FROM prof WHERE email ='$user' AND mdp ='$pass' ";
		$result1 = mysqli_query($conn, $sql1);

		$sql2 = "SELECT * FROM prof WHERE email ='$user' AND mdp !=  '$pass' ";
		$result2 = mysqli_query($conn, $sql2);

		$sql3 = "SELECT * FROM prof WHERE email != '$user' AND mdp = '$pass' ";
		$result3 = mysqli_query($conn, $sql3);


			if (mysqli_num_rows($result1) === 1) {
					header("Location: cour1.html");
					$req="select classe from isidette where email ='$user'";
					$result = mysqli_query($conn, $req);
					
						  
					exit();
				}

			 if (mysqli_num_rows($result3) === 1) {
					header("Location:index.php?log=Incorect Email");
					exit();
			}

			else if (mysqli_num_rows($result2) === 1) {
					header("Location:index.php?log=Incorect password");
					exit();
			}

			else{
				header("Location: index.php");
					exit();
				}


				
}