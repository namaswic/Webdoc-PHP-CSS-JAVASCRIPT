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
$area=$_POST['area'];
$doctor=$_POST['doctor'];
$username=$_POST['username'];
$password=$_POST['password'];
$patientId=$_POST['Id'];

$query="select * from doctor where area='$area' And doctor_type='$doctor' ";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0){

?>
<body>
<h3><font size="4">Sorry no results found. Please try searching again.</font></h3>
<a href="home.php"><font color="maroon" size="4">Go Back</font></a>
</body>
<?php
}
else {
echo "The following are the results for your search:<br>"; 
echo "Select the Doctor:<br><hr>"; 
while($row = mysql_fetch_array($result)){
echo "<table>";
echo "<tr>";
echo "<td>";
echo "<b>Name:</b>";
echo "</td>";
echo "<td>";
echo $row['name'] . " " . $row['surname'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Area:</b>";
echo "</td>";
echo "<td>";
echo $row['area'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Address:</b>";
echo "</td>";
echo "<td>";
echo $row['address'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Contact:</b>";
echo "</td>";
echo "<td>";
echo $row['contact'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Time Slot:</b>";
echo "</td>";
echo "<td>";
echo $row['time_slot'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Charges per visit:</b>";
echo "</td>";
echo "<td>";
echo $row['charges_per_visit'];
echo "</td>";
echo "</tr>";
echo "</table>";
$doctorId=$row['doctor_id'];
?>
<form action="signin3.php" method="post">
<font size="4">Enter Date of Appointment:</font><input type="text" name="date"> 
<input type="hidden" name="patientId" value="<?php echo $patientId; ?>">
<input type="hidden" name="doctorId" value="<?php echo $doctorId; ?>">
<input type="hidden" name="username" value="<?php echo $username; ?>">
<input type="hidden" name="password" value="<?php echo $password; ?>">
<input type="submit" value="Select">
</form>

<?php
echo "<hr>";
}}
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
</body>
</html>
