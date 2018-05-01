<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>"search.php"</title>

  
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
<form action="searchDoctor.php" method="post">
<input name="name" type="text"><input value="Search by FirstName" type="submit">&nbsp;
</form>
<form action="searchArea.php" method="post">
<input name="area" type="text"><input value="Search by Area" type="submit">&nbsp;
</form>
<form action="searchDoctortype.php" method="post">
<input name="doctortype" type="text"><input value="Search by Doctor type" type="submit">
</form>
<hr><u><font color="black"><b>LISTS OF DOCTORS</b></font><u>
</u></u>
<hr><?php mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("appointment_system") or die(mysql_error());

$query = "select * from doctor";

$result= mysql_query($query);

while($row = mysql_fetch_array($result)){
echo "<table>";

echo "<tr>";

echo "<td>" . "Name:" . "";

echo "<td>Dr " . $row['name'] . " " . $row['surname'];

echo "</tr>";

echo "<tr>";

echo "<td>" . "Area:" . "";

echo "<td>" . $row['area'] . "";

echo "</tr>";

echo "<tr>";

echo "<td>" . "Contact:" . "";

echo "<td>" . $row['contact'] . "";

echo "</tr>";

echo "<tr>";

echo "<td>" . "Address:" . "";

echo "<td>" . $row['address'] . "";

echo "</tr>";

echo "<tr>";

echo "<td>" . "Doctor type:" . "";

echo "<td>" . $row['doctor_type'] . "";

echo "</tr>";

echo "<tr>";

echo "<td>" . "Charges per visit:" . "";

echo "<td>" . $row['charges_per_visit'] . "";

echo "</tr>";


echo "</table>"; 

echo "<hr>";

}
?><u><u><br>
</u></u>
<u><u><br>
<br>
<br>
<br>
</u></u>
<div id="footer"><i><i><a href="aboutus.php">ABOUT US </a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b><font>To
cancel appointments <a href="cancel.php">click here...</a></font></b>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="contactus.php">CONTACT US</a>
</i></i></div>

</body></html>