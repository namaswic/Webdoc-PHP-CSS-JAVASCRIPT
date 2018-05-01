<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
  
  <link rel="stylesheet" type="text/css" href="style.css">

  <script type="text/javascript">
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["dob"].value;
var z = document.forms["myForm"]["address"].value;
var a = document.forms["myForm"]["contact"].value;
var b = document.forms["myForm"]["malefemale"].value;
var c = document.forms["myForm"]["date"].value;
   
    if (x == null || x == "" ||x =="NONE" || y == null || y == "" || z == null || z == "" ||z =="NONE" || a == null || a == "" ||a =="NONE" || b == null || b == "" ||b =="NONE" || c == null || c == "" ||c =="NONE" ) {
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
$doctorId=$_POST['id'];
echo "Enter patient details"
?>
<form name="myForm" action="confirm2.php" onsubmit="return validateForm()" method="post">
<table>
<tr>
<td>Name:</td> 
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Date Of Birth:</td> 
<td><input type="text" name="dob"></td>
</tr>
<tr>
<td>Contact:</td> 
<td><input type="text" name="contact"></td>
</tr>
<tr>
<td>Address:</td> 
<td><input type="text" name="address"></td>
</tr>
<tr>
<td>Select:</td>
<td>
<select name="malefemale">
<option value="Male">Male</option>
<option value="Female">Female</option></td>
</select>
</td>
</tr>
<tr>
<td colspan="2"><b>Enter the date of appointment</b></td>
</tr>
<tr>
<td>Date(dd/mm/yy):</td> 
<td><input type="text" name="date"></td>
</tr>
</table>
<input type="hidden" name="doctorId" value="<?php echo $doctorId;?>">
<input type="submit" value="Submit">
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

