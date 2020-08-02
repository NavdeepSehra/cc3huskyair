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
<?php include('navigate_bar_odonar.php'); ?>
<?php
$unique_id=''; 
if(isset($_GET['id']))
{
	$unique_id=$_GET['id'];
}
$sql="SELECT * FROM organ_donar_user, combine_user where `organ_donar_user`.`unique_id`=`combine_user`.`unique_id`";
if($unique_id!='')
{
	$sql.="and `organ_donar_user`.`unique_id`=$unique_id ";	
}
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
?>
<div class="divcen">
<h1><?php echo $row['adname'];?></h1>
<table id="customers">
<tr><th>Name</th><th>Details</th></tr>
<tr><td>Unique ID</td><td><?php echo $_SESSION['Unique_ID'];?></td></tr>
<tr><td>Username</td><td><?php echo $_SESSION['User'];?></td></tr>
<tr><td>User Role</td><td><?php echo $_SESSION['role'];?></td></tr>
<tr><td>Address</td><td><?php echo $row['adaddress'];?>, <?php echo $row['adcity'];?><br> <?php echo $row['adstates'];?> <?php echo $row['adpostal'];?>, <?php echo $row['adcountry'];?></td></tr>
<tr><td>Email ID</td><td><?php echo $row['ademail'];?></td></tr>
<tr><td>Mobile Number</td><td><?php echo $row['admobile_no'];?></td></tr>
<tr><td>Donating Organ</td><td><?php echo $row['organ'];?></td></tr>
</table>
</div>
<?php 
}
?>
</body>
</html>