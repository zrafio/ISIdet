<?php
//session_start();
include_once"dataconnection.php";

$pren=trim($_POST['prenom']);
$nom=trim($_POST['nom']);
$mail=trim($_POST['mail']);
$mdp=trim($_POST['password']);
$repass=trim($_POST['repass']);
$Depart=$_POST['Departement'];


var_dump($_SESSION);



$req1="select * from prof where email = '$mail' ";
$result1 = mysqli_query($conn, $req1);


$req2="select * from prof where email ='$mail' ";
$result2 = mysqli_query($conn, $req2);

if(mysqli_num_rows($result1) === 0 ) 
{
    header("Location: index.php?error=email est invalide");
    exit();
}

else if (mysqli_num_rows($result2) !== 0) 
{
    header("Location: index.php?error=deja inscit");
    exit();
}


else if($mdp !== $repass){
    header("Location: index.php?error=The confirmation password  does not match");
    exit();
}

else if(!empty($pren) && !empty($nom) && !empty($mail)&& !empty($mdp) && !empty($repass) )
{
    $newPassword = password_hash($mdp, PASSWORD_DEFAULT); 
    
    $sql = "INSERT INTO prof VALUES ('$pren' , '$nom' , '$mail' , '$newPassword' , '$Depart'  ) ";

    if ($conn->query($sql) === TRUE) 
    {
        header("Location: index.php?success=Your account has been created successfully");
        exit();
    }
else{
    header("Location: index.php?error=unknown error occurred");
    exit();
    }

        
}
                        


?>
