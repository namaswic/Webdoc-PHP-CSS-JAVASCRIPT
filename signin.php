<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>

  <link rel="stylesheet" type="text/css" href="style.css">


  <script type="text/javascript">
function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    var y = document.forms["myForm"]["password"].value;

    if (x == null || x == "" || y == null || y == "") {
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
<h2><i>Sign IN</i></h2>
<form name="myForm" action="signin1.php" onsubmit="return validateForm()" method="post">
  <table width="50%">
    <tbody>
      <tr>
        <td>
        <center>
        <p class="test1"><b>UserName</b></p>
        </center>
        </td>
        <td>
        <center><input name="username" type="text"></center>
        </td>
      </tr>
      <tr>
        <td>
        <center>
        <p class="test1"><b>Password</b></p>
        </center>
        </td>
        <td>
        <center><input name="password" type="password"></center>
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
