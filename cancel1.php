<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
  
  <link rel="stylesheet" type="text/css" href="style.css">

  
  <script type="text/javascript">
function validateForm() {
    var x = document.forms["myForm"]["area"].value;
    var y = document.forms["myForm"]["doctor"].value;
   
    if (x == null || x == "" ||x =="NONE" || y == null || y == "") {
        alert("All details must be filled out");
        return false;
    }
   
}
  </script>
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


$id=$_POST['appointId'];
$query="select appointment_id from appointment where appointment_id='$id'";
$result=mysql_query($query);
$count=mysql_num_rows($result);

if($count == 1)
{
$query1="select patient_id from appointment where appointment_id='$id'";
$result1=mysql_query($query1);
while($row = mysql_fetch_array($result1)){
$patientId= $row['patient_id'];
}



$query2="select username from patient where patient_id= '$patientId'";
$result2=mysql_query($query2);
$count2=mysql_num_rows($result2);

while($row = mysql_fetch_array($result2)){
$user= $row['username'];
}

$string="new user";
if($user == $string)
{
echo "Your Appointment has been cancelled";
$query3="delete from appointment where appointment_id='$id'";
mysql_query($query3);
$query4="delete from patient where patient_id='$patientId'";
mysql_query($query4);
}
else
{
echo "Your Appointment has been cancelled";
$query3="delete from appointment where appointment_id='$id'";
mysql_query($query3);
}
}
else{
echo "Enter a valid Appointment Id" . "<br>";?>
<a href="cancel.php"><font color="black">Try again</font></a>
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
