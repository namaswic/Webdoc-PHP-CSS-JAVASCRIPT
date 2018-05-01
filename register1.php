<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html><head>
  
  <link rel="stylesheet" type="text/css" href="style.css">

  
  <script type="text/javascript">
function validateForm() {
    var a = document.forms["myForm"]["name"].value;
    var b = document.forms["myForm"]["dob"].value;
    var c = document.forms["myForm"]["username"].value;
    var d = document.forms["myForm"]["password"].value;
 var e = document.forms["myForm"]["contact"].value;
 var f = document.forms["myForm"]["address"].value;
    if (a == null || a == "" || b == null || b == "" || c == null || c == "" || d == null || d == "" || e == null || e == "" || f == null || f == "") {
        alert("All details must be filled out");
        return false;
    }
   
}
  </script><?php $name="hi";
?>
  <title></title>

  
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
$name=$_POST['name'];
$dob=$_POST['dob'];
$contact=$_POST['contact'];
$address=$_POST['address'];

?>
<h2><i>Register</i></h2>
<form name="myForm" action="proceed.php" onsubmit="return validateForm()" method="post">
  <table width="50%">
    <tbody>
      <tr>
        <td>
        <center>
        <p class="test1"><b>Full Name</b></p>
        </center>
        </td>
        <td>
        <center><input name="name" id="name" type="text" value="<?php echo $name;?>"></center>
        </td>
      </tr>
      <tr>
        <td>
        <center>
        <p class="test1"><b>Date of Birth(dd/mm/yy)</b></p>
        </center>
        </td>
        <td>
        <center><input name="dob" type="text" value="<?php echo $dob;?>"></center>
        </td>
      </tr>
      <tr>
        <td>
        <center><b>
        <p class="test1">Username</p>
        </b></center>
        </td>
        <td>
        <center><input name="username" type="text" ></center>
        </td>
      </tr>
      <tr>
        <td>
        <center><b>
        <p class="test1">Password</p>
        </b></center>
        </td>
        <td>
        <center><input name="password" type="text"></center>
        </td>
      </tr>
<tr>
        <td>
        <center><b>
        <p class="test1">Contact</p>
        </b></center>
        </td>
        <td>
        <center><input name="contact" type="text" value="<?php echo $contact;?>"></center>
        </td>
      </tr>
<tr>
        <td>
        <center><b>
        <p class="test1">Address</p>
        </b></center>
        </td>
        <td>
        <center><input name="address" type="text" value="<?php echo $address;?>"></center>
        </td>
      </tr>
<tr>
        <td>
        <center><b>
        <p class="test1">Select</p>
        </b></center>
        </td>
        <td>
        <center>
<select name="malefemale">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
       </center>
        </td>
      </tr>
    </tbody>
  </table>
  <i><i><input value="Submit" style="margin-left: 200px;" align="middle" type="submit"> </i></i></form>
</div>

<i><i><br>
<br>
<br>
<br>
</i></i>
<div id="footer"><i><i><a href="aboutus.php">ABOUT US </a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b><font>To
cancel appointments <a href="cancel.php">click here...</a></font></b>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="contactus.php">CONTACT US</a>
</i></i></div>

</body></html>