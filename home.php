<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

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
<h2><i>Book Appointment as a Guest</i></h2>
<form name="myForm" action="appoint1.php" onsubmit="return validateForm()" method="post">
  <table width="75%">
    <tbody>
      <tr>
        <td>
        <center>
        <p class="test1"><b>Select Area</b></p>
        </center>
        </td>
        <td>
        <center>
        <select name="area">
        <option value="">----------Select Area----------</option>
        <option value="Malad">Malad</option>
        <option value="Kandivali">Kandivali</option>
        <option value="Andheri">Andheri</option>
        <option value="Borivali">Borivali</option>

        </select>
        </center>
        </td>
      </tr>
      <tr>
        <td>
        <center><b>
        <p class="test1">Doctor Type</p>
        </b></center>
        </td>
        <td>
        <center>
        <select name="doctor">
        <option>---------Doctor Type---------</option>
        <option value="Cardiologist">Cardiologist</option>
        <option value="Dentist">Dentist</option>
        <option value="Gynecologist">Gynecologist</option>
        </select>
        </center>
        <br>
        </td>
      </tr>
    </tbody>
  </table>
  <input value="Submit" style="margin-left: 300px;" type="submit"></form>
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
