<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("appointment_system") or die(mysql_error());
$username=$_POST['username'];
$password=$_POST['password'];


$sql="SELECT patient_id FROM patient WHERE username='$username' and password='$password'";

$result1=mysql_query($sql);

while($row1 = mysql_fetch_array($result1)){
$patient_id=$row1['patient_id'];
}
$sql1="SELECT * FROM appointment WHERE patient_id='$patient_id'";


$result2=mysql_query($sql1);


while($row1 = mysql_fetch_array($result2)){
?>
<font size="5">Appointment Details</font>
<table>
<tr>
<td>Appointment ID</td>
<td><?php echo $row1['appointment_id']; ?></td>
</tr>
<tr>
<td>Date</td>
<td><?php echo $row1['date'];?></td>
</tr>
<tr>
<td>Doctor ID</td>
<td><?php echo $row1['doctor_id'];?></td>
</tr>
<tr>
<hr>
<?php
}?>
