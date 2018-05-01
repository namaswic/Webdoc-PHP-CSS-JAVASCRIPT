<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("appointment_system") or die(mysql_error());
$name=$_POST['name'];
$dob=$_POST['dob'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$malefemale=$_POST['malefemale'];
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from patient where username='$username'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(count==0)
{
?>

<?php
}
else
{
}
?>