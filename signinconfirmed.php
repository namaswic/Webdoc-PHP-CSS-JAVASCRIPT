<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>

  <link rel="stylesheet" type="text/css" href="style.css">



</head><body>
<div id="header">
<h1><b><font size="20">WEBDOC</font></b></h1>
</div>

<hr>
<div id="body">
<table width="100%">
  <tbody>
    <tr>
      <td><a href="home.php"><img src="home.png" height="100" width="100"></a></td>
      <td><a href="register.php"><img src="register.png" height="100" width="100"></a></td>
      <td><a href="search.php"><img src="search.png" height="100" width="100"></a></td>
      <td><a href="signin.php"><img src="signin.jpg" height="100" width="100"></a></td>
      <td><a href="doctorLogin.php"><img src="doctor.png" height="100" width="100"></a></td>
    </tr>
    <tr>
      <td>
      <p class="test1"><a href="home.php">Home</a></p>
      </td>
      <td>
      <p class="test1"><a href="register.php">Register</a></p>
      </td>
      <td>
      <p class="test1"><a href="search.php">Search Doctors</a></p>
      </td>
      <td>
      <p class="test1"><a href="signin.php">Sign IN</a></p>
      </td>
      <td>
      <p class="test1"><a href="doctorLogin.php">For Doctors</a></p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<br>

<br>

<div id="area">


<?php
 mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("appointment_system") or die(mysql_error());

$patientId=$_POST['patientId'];
$doctorId=$_POST['doctorId'];
$date=$_POST['date'];
$username=$_POST['username'];
$password=$_POST['password'];
$query_for_doc="select email from doctor where doctor_id='$doctorId'";
$email=(string)mysql_query($query_for_doc);
$subject = 'Appointment Booked by WEBDOC';
$message = 'Here are the appointment details:\n';
mail($email, $subject, $message);

$query2="insert into appointment(patient_id,doctor_id,date) values ('$patientId','$doctorId','$date')";
mysql_query($query2);
$query3="select appointment_id from appointment where patient_id='$patientId' and date='$date' ";
$result2=mysql_query($query3);
while($row = mysql_fetch_array($result2)){

$appointmentId= $row['appointment_id'];
}
echo "YOUR APPOINTMENT HAS BEEN BOOKED" . "<br>";
echo "Appointment Id is " . $appointmentId . "<br>";
?>
<form action="signin1.php" method="post">
<input type="hidden" name="username" value="<?php echo $username;?>">
<input type="hidden" name="password" value="<?php echo $password;?>">

<input type="submit" value="Go to Login Page">
</div>

<br>

<br>

<br>

<br>

<div id="footer"><i><i><a href="aboutus.php">ABOUT US </a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b><font>To
cancel appointments <a href="cancel.php">click here...</a></font></b>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="contactus.php">CONTACT US</a>
</i></i></div>

</body></html>
