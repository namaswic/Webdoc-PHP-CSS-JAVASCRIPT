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
<font size="6">Confirm Your Appointment Details</font>
<?php
 mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("appointment_system") or die(mysql_error());


$dId=$_POST['doctorId'];
$pId=$_POST['patientId'];
$date=$_POST['date'];
$username=$_POST['username'];
$password=$_POST['password'];

$query1="select * from patient where patient_id='$pId' ";
$result1=mysql_query($query1);

$query2="select * from doctor where doctor_id='$dId'";
$result2=mysql_query($query2);

while($row = mysql_fetch_array($result1)){
$namep= $row['name'];
$dob= $row['date_of_birth'];
$contact=$row['contact'];
$address=$row['address'];
$malefemale=$row['male_female'];
}
?>
<table width="30%">
<tr>
<td>Name:</td>
<td><?php echo $namep; ?></td>
</tr>
<tr>
<td>Date of Birth:</td>
<td><?php echo $dob; ?></td>
</tr>
<tr>
<td>Your Contact:</td>
<td><?php echo $contact; ?></td>
</tr>
<tr>
<td>Address:</td>
<td><?php echo $address; ?></td>
</tr>
<tr>
<td>Gender</td>
<td><?php echo $malefemale; ?></td>
</tr>
<tr>
<td>Date of Appointment</td>
<td><?php echo $date; ?></td>
</tr>

<?php
while($row = mysql_fetch_array($result2)){
$named=$row['name'];
$surname=$row['surname'];
$area=$row['area'];
$timeslot=$row['time_slot'];
$addressd=$row['address'];
$doctortype=$row['doctor_type'];

}

?>
<tr>
<td>Doctor to be appointed</td>
<td><?php echo $named . " " . $surname;?></td>
</tr>
<tr>
<td>Area</td>
<td><?php echo $area; ?></td>
</tr>
<tr>
<td>Time Slot</td>
<td><?php echo $timeslot; ?></td>
</tr>
<tr>
<td>Address</td>
<td><?php echo $addressd; ?></td>
</tr>
<tr>
<td>Doctor Type</td>
<td><?php echo $doctortype; ?></td>
</tr>
</table>
<form action="signinconfirmed.php" method="post" >
<input type="hidden" name="doctorId" value="<?php echo $dId;?>">
<input type="hidden" name="patientId" value="<?php echo $pId;?>">
<input type="hidden" name="username" value="<?php echo $username; ?>">
<input type="hidden" name="date" value="<?php echo $date;?>">
<input type="hidden" name="password" value="<?php echo $password; ?>">
<input type="submit" value="Confirm">

</form>
<form action="signin1.php">
<input type="hidden" name="username" value="<?php echo $username;?>">
<input type="hidden" name="password" value="<?php echo $password;?>">

<input type="submit" value="Cancel">
</form>
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
