<?php 
session_start();
header('location:index.php');
   //conect to database
 $db = mysqli_connect('us-cdbr-east-02.cleardb.com','bbdd2dc118b6ba','2b2b65ea') or die('could not connect to server');
  mysqli_select_db($db, 'heroku_014b48a931e6a57');
//capture user's email 
 $email =  $_POST["email"];

 //check for existing email
 $user_check_query = "SELECT * FROM user WHERE email = '$email'";
 $results = mysqli_query($db, $user_check_query);
 if($results === FALSE) { 
    die(mysqli_error($db)); // TODO: better error handling
}
 $user = mysqli_num_rows($results);

//capture email if no error
 		if ($user == 1) {
 			echo 'Email Already Exist';
 		}else{
 		  $query = "INSERT INTO user (email) VALUES ('$email')";
			mysqli_query($db, $query);
			echo "email captured";
 		}
 	
 	
   ?>
