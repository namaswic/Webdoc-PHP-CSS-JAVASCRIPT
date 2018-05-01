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
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM doctor WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count ==1){
echo  "<font size='4'>" . "Here are the appointment details which have been booked by the system:" . "</font>";
while($row = mysql_fetch_array($result)){
$doctorId=$row['doctor_id'];
}
$query1="select * from appointment where doctor_id='$doctorId'";
$result1=mysql_query($query1);
$count1=mysql_num_rows($result1);
echo "<br><font size='4'>The number of appointmets booked are: " . $count1 . "</font><br><hr>";
while($row = mysql_fetch_array($result1)){
$patientId=$row['patient_id'];
$appointmentId=$row['appointment_id'];
$date=$row['date'];
$query2="select * from patient where patient_id='$patientId'";
$result2=mysql_query($query2);
while($row1 = mysql_fetch_array($result2)){
?>
<font size="5">Patient Details</font>
<table>
<tr>
<td>Name</td>
<td><?php echo $row1['name']; ?></td>
</tr>
<tr>
<td>Date of Birth</td>
<td><?php echo $row1['date_of_birth'];?></td>
</tr>
<tr>
<td>Contact</td>
<td><?php echo $row1['contact'];?></td>
</tr>
<tr>
<td>Address</td>
<td><?php echo $row1['address'];?></td>
</tr>
<tr>
<td>Gender</td>
<td><?php echo $row1['male_female'];?></td>
</tr>
<tr>
<td>Date of appointment</td>
<td><?php echo $date;?></td>
</tr>
</table>
<br>
<hr>

<?php
}
}
}


else {
echo  "<font size='4'>" . "Wrong Username or Password or Not Registered with Us" . "</font>";
?>
<br><font size="4">To register with US</font><br><a href="contactus.php"><font color="black" size="4">Contact Us</font></a>
<?php
}
?>
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

