<?php include 'config.php';
session_start() ;


if($_SERVER["REQUEST_METHOD"] == "POST"){
   $username =$_POST["username"];
   $email =$_POST["email"];
   $the_appointment =$_POST["the_appointment"];
   $appointment_date =$_POST["appointment_date"];
   $appointment_time =$_POST["appointment_time"];

   $sql = "INSERT INTO `bookings` (`username`, `email`, `the_appointment`, `appointment_date`, `appointment_time`) VALUES ('$username', '$email', '$the_appointment', '$appointment_date', '$appointment_time')";

   if($conn->query($sql) == TRUE){
      echo "Booking Successfully";
   }else{
      echo "Error:" .sql ."<br>" .$conn->error;
   }

}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
 	<title>Appointment Booking Form</title>
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
             <nav id="nav">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
            </ul>
         </nav>
      </header>
      <section>
        <div id="booking-form">
         <h1 style="color:hotpink;">Booking Form</h1>
         <form action="logout.php" method="post" id="bookingForm" >
           <label style="color:hotpink;" for="username">Username:</label>
           <input id="bookingFormInput" type="text" name="name" id="name" required>
           <label style="color:hotpink;" for="email">Email:</label>
           <input id="bookingFormInput" type="email" name="email" id="email" required>
           <label style="color:hotpink;" for="appointment">The Appointment:</label>
           <input id="bookingFormInput" type="text" name="appointment" id="appointment" required>
           <label style="color:hotpink;" for="appointment-date">Appointment Date:</label>
           <input id="bookingFormInput" type="date" name="appointment-date" id="appointment-date" required>
            <label style="color:hotpink;" for="appointment-date">Appointment Time:</label>
           <input id="bookingFormInput" type="time" name="appointment-time" id="appointment-time" required>
           <button id="bookingFormButton" type="submit">Book Now </button>
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











           