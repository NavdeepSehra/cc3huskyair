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
<?php include('navigate_bar_pilot.php'); ?>
<?php
$unique_id=''; 
if(isset($_GET['id']))
{
	$unique_id=$_GET['id'];
}
$sql="SELECT * FROM pilots_user, combine_user where `pilots_user`.`unique_id`=`combine_user`.`unique_id`";
if($unique_id!='')
{
	$sql.="and `pilots_user`.`unique_id`=$unique_id ";	
}
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
?>
<div class="divcen">
<h1><?php echo $row['lnname'];?></h1>
<table id="customers">
<tr><th>Name</th><th>Details</th></tr>
<tr><td>Unique ID</td><td><?php echo $_SESSION['Unique_ID'];?></td></tr>
<tr><td>Username</td><td><?php echo $_SESSION['User'];?></td></tr>
<tr><td>User Role</td><td><?php echo $_SESSION['role'];?></td></tr>
<tr><td>Address</td><td><?php echo $row['lnaddress'];?>, <?php echo $row['lncity'];?><br> <?php echo $row['lnstates'];?> <?php echo $row['lnpostal'];?>, <?php echo $row['lncountry'];?></td></tr>
<tr><td>Email ID</td><td><?php echo $row['lnemail'];?></td></tr>
<tr><td>Mobile Number</td><td><?php echo $row['lnmobile_no'];?></td></tr>
<tr><td>Total Hours</td><td><?php echo $row['total_hrs'];?> per week</td></tr>
<tr><td>Certification</td><td><?php echo $row['certification'];?></td></tr>
<tr><td>Rating</td><td><?php echo $row['rating'];?></td></tr>
</table>
</div>
<?php 
}
?>
</body>
</html>