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
<?php include('navigate_bar_aircraft.php'); ?>
<?php
$unique_id=''; 
if(isset($_GET['id']))
{
	$unique_id=$_GET['id'];
}
$sql="SELECT * FROM aircraft_user, combine_user where `aircraft_user`.`unique_id`=`combine_user`.`unique_id`";
if($unique_id!='')
{
	$sql.="and `aircraft_user`.`unique_id`=$unique_id ";	
}
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
?>
<div class="divcen">
<h1><?php echo $_SESSION['User'];?></h1>
<table id="customers">
<tr><th>Name</th><th>Details</th></tr>
<tr><td>Unique ID</td><td><?php echo $_SESSION['Unique_ID'];?></td></tr>
<tr><td>Username</td><td><?php echo $_SESSION['User'];?></td></tr>
<tr><td>User Role</td><td><?php echo $_SESSION['role'];?></td></tr>
<tr><td>Owner ID</td><td><?php echo $row['owner_unique_id'];?></td></tr>
<tr><td>Aircraft Type</td><td><?php echo $row['type'];?></td></tr>
<tr><td>N Number</td><td><?php echo $row['n_number'];?></td></tr>
<tr><td>Engine Type</td><td><?php echo $row['engine'];?></td></tr>
<tr><td>Cargo</td><td><?php echo $row['cargo'];?></td></tr>
<tr><td>Person Capacity</td><td><?php echo $row['person_capacity'];?></td></tr>
</table>
</div>
<?php 
}
?>
</body>
</html>