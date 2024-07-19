<?php include 'config.php';
session_start() ;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../CSS/style.css">
	<title>Login Form</title>
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
   		</div>
   	</header>
   	<section>
   		</div><br>
        <div id="sign-up-form">
            <h1 style="color:hotpink;">Login for Bookings and Services</h1>
            <div id="sign-up-form">
            <form method="post" action="index.php">
               <input type="email" class id="input-box" placeholder="email"><br>
               <input type="password" class id="input-box" placeholder="password"><br>
               <input type ="submit" class ="btn" value= "Login" name="login"><br> 
               <p style="color:hotpink;">Dont have an account?<a href="signUp.php">SignUp here</a></p>
           </form>
         </div>
     </section>
     <footer>
            <div id="footerParent">
            <div id="footerChild1">
               <p style="color:purple;">&copy; 2024 Lash Cosmetics. All Rights Reserved </p>
            </div>
         </div>
      </footer>
                
                  
			
		</nav>
	

</body>
</html>
