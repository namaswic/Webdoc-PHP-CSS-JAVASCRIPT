<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
  
  <link rel="stylesheet" type="text/css" href="style.css">

  <head>
 <script type="text/javascript">
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["email"].value;
var a = document.forms["myForm"]["contact"].value;
var b = document.forms["myForm"]["comments"].value;
   
    if (x == null || x == "" ||x =="NONE" || y == null || y == "" ||y =="NONE" || a == null || a == "" ||a =="NONE" || b == null || b == "" ||b =="NONE") {
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
<font size="3">*All details are neccessary to be filled</font>
<form name="myForm" action="contactus1.php" onsubmit="return validateForm()" method="post">
  <table width="75%">
    <tbody>
      <tr>
        <td>
        <center>
        <p class="test1"><b>Name</b></p>
        </center>
        </td>
        <td>
        <center>
        <input type="text" name="name">
        </center>
        </td>
      </tr>
      <tr>
        <td>
        <center><b>
        <p class="test1">Email(To revert back to you)</p>
        </b></center>
        </td>
        <td>
        <center>
       <input type="text" name="email">
        </center>
        <br>
        </td>
      </tr>
 <tr>
        <td>
        <center><b>
        <p class="test1">Contact</p>
        </b></center>
        </td>
        <td>
        <center>
       <input type="text" name="contact">
        </center>
        <br>
        </td>
      </tr>
<tr>
        <td>
        <center><b>
        <p class="test1">Your Comments and Feed back</p>
        </b></center>
        </td>
        <td>
        <center>
       <input type="text"
       cols="40" 
       rows="5" 
       style="width:200px; height:50px;" 
       name="comments" 
       id="Text1" 
       value="" />
        </center>
        <br>
        </td>
      </tr>
    </tbody>
  </table>
  <input value="Submit" style="margin-left: 350px;" type="submit"></form>
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









