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
<?php mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("appointment_system") or die(mysql_error());
$name=$_POST['name'];
$dob=$_POST['dob'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$malefemale=$_POST['malefemale'];
$username=$_POST['username'];
$password=$_POST['password'];

$query1="select * from patient where username='$username'";
$result=mysql_query($query1);

$count=mysql_num_rows($result);
if($count==0)
{
$query= "insert into patient (username, password, name, date_of_birth, contact, address, male_female) VALUES ( '$username', '$password','$name', '$dob', '$contact', '$address', '$malefemale')";
mysql_query($query);
echo "Registered!!";}
else
{
echo "Username already used.Please try again with another username" . "<br>";
?>
<form action="register1.php" method="post">
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="dob" value="<?php echo $dob; ?>">
<input type="hidden" name="contact" value="<?php echo $contact; ?>">
<input type="hidden" name="address" value="<?php echo $address; ?>">
<input type="submit" value="Try Again">
</form>
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
