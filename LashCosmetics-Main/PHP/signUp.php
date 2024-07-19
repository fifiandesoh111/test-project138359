<?php include 'config.php';
session_start() ;

?>
<!DOCTYPE html>
<html lang="en">
   <head>
 	<title>Welcome to Lash Cosmetics</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
   </head>

   <body>
   	<header>
   		<div id="headerParent">
   			<div id="child1">
   				<img src="../imgs/CompanyLogo.jpg" alt="Logo" id="Logo">
   			</div>
   			<div id="child2">
   				<div id="child2child1">
                  <h1 style="color:hotpink;" id="indexHeaderText">LASH COSMETICS</h1>
                  <p style="color:hotpink;" id="idexSloganText"><i>Vibrant Slay & Glow!</i></p>
               </div>
            </div>
            </div><br>
      </header>
      <section>
        <div id="sign-up-form">
         <h1 style="color:hotpink;">Sign Up For Bookings</h1>
         <form method="post" action="index.php">
            <?php include ('config.php'); ?>
            <input type="username" class id ="input-box" placeholder="username"><br>
            <input type="email" class id="input-box" placeholder="email"><br>
            <input type="password" class id="input-box" placeholder="password"><br>
            <p style="color:hotpink;"><span><input type="checkbox"></span>I agree to the terms of services</p>
            <input type ="submit" class ="btn" value= "Sign up" name="signUp"><br>
            <p style="color:hotpink;">Already have an account?<a href="login.php">Login here</a></p>
            </div>
         </form>
      </section>
         <div id="sectionDiv1">
            <h3 style="color:purple;">Lash Cosmetics is a brand that focuses on glam and beauty tips which provides beauty product and services for our customers.</h3>
         </div>
         <div id="sectionDiv2">
       </div>
      <footer>
            <div id="footerParent">
            <div id="footerChild1">
               <p style="color:purple;">&copy; 2024 Lash Cosmetics. All Rights Reserved </p>
            </div>
         </div>
      </footer>
   </body>