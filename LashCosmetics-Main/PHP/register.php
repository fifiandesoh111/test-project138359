<?php

include 'config.php';

if(isset($_POST['signUp'])){
   $username = $_POST['username'];
   $email =  $_POST['email'];
   $password = $_POST['password'];
   $checkEmail= "SELECT * FROM `register_db` where  username='$username', email='$email' and password='$password'";
   $result=$conn->query($checkEmail);
   if ($result->num_rows>0) {
      echo "Email Address Already Exists !";
   } else {
      $insertQuery= "INSERT INTO `register_db`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
      if ($conn->query($insertQuery)==TRUE) {
         header("location:index.php");
      } else {
         echo "Error:".$conn->error;
      }
      

   }
   

}
if (isset($_POST['login.php'])) {
   $email = $_POST["email"];
   $password= $_POST["password"];

   $sql= "SELECT * FROM `register_db` where email='$email' and password ='$password'";
   $result=$conn->query($sql);
   if ($result->num_rows>0) {
      session_start();
      $row=$result->fetch_assoc();
      $_SESSION['email']=$row['email'];
      header("location:index.php");
      exit();
   }
   else{
      echo"Not Found, Incorrect Email or Password";
   }
}

?>

