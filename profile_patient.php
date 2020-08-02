<?php session_start(); ?>
<?php include('Include\connection2.php');?>
<!DOCTYPE html>
<html>
<head>
<link href="Husky_Design.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
    <title>Husky Air</title>
    <link rel="shortcut icon" href="Include/Hlogo.png" />
</head>
<body>
<?php include('navigate_bar_patient.php'); ?>
<?php
$unique_id=''; 
if(isset($_GET['id']))
{
	$unique_id=$_GET['id'];
}
$sql="SELECT * FROM patient_user, combine_user where `patient_user`.`unique_id`=`combine_user`.`unique_id`";
if($unique_id!='')
{
	$sql.="and `patient_user`.`unique_id`=$unique_id ";	
}
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
?>
<div class="divcen">
<h1><?php echo $row['nmname'];?></h1>
<table id="customers">
<tr><th>Name</th><th>Details</th></tr>
<tr><td>Unique ID</td><td><?php echo $_SESSION['Unique_ID'];?></td></tr>
<tr><td>Username</td><td><?php echo $_SESSION['User'];?></td></tr>
<tr><td>User Role</td><td><?php echo $_SESSION['role'];?></td></tr>
<tr><td>Address</td><td><?php echo $row['nmaddress'];?>, <?php echo $row['nmcity'];?><br> <?php echo $row['nmstates'];?> <?php echo $row['nmpostal'];?>, <?php echo $row['nmcountry'];?></td></tr>
<tr><td>Email ID</td><td><?php echo $row['nmemail'];?></td></tr>
<tr><td>Mobile Number</td><td><?php echo $row['nmmobile_no'];?></td></tr>
<tr><td>Weight</td><td><?php echo $row['weight'];?> per Kg</td></tr>
<tr><td>Luggage</td><td><?php echo $row['luggage'];?> per Person</td></tr>
<tr><td>Treatment</td><td><?php echo $row['treatment'];?></td></tr>
</table>
</div>
<?php 
}
?>
</body>
</html>