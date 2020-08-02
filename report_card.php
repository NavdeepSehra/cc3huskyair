<?php session_start();?>
<?php include('Include/connection2.php');?>
<!DOCTYPE html>
<html>
<head>
<link href="Husky_Design.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8" />
    <title>Husky Air</title>
    <link rel="shortcut icon" href="Include/Hlogo.png" />
</head>
<body>
<?php include('navigate_bar_admin.php'); ?>
<form id="tabb" method="post" enctype="multipart/form-data">
<h1>Generate Flight's Report Card</h1>
<table>
<tr><td><select type="text" name="flight_id">
<?php 
$sql="select * from pilots_user";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
?>
<option value="<?php echo $row['unique_id']; ?>"><?php echo $row['lnname']; ?></option>
<?php
}
?>
</select></td><td><input type="text" placeholder="Flight Number" name="flight_number"></td></tr>
<tr><td><input type="text" placeholder="Weekday" name="weekday_f"></td><td><input type="text" placeholder="Date" name="dept_date"></td></tr>
<tr><td><input type="text" placeholder="Departure States" name="dept_state"></td><td><input type="text" placeholder="Arrival States" name="arrival_state"></td></tr>
<tr><td><input type="text" placeholder="Departure Time" name="dept_time"></td><td><input type="text" placeholder="Arrival Time" name="arrival_time"></td></tr>
<tr><td><input type="text" placeholder="Gate" name="gate_f"></td><td><input type="text" placeholder="Remark" name="remark_f"></td></tr>
<tr><td><input id="buttonuser2" type="submit" name="submit" value="Submit"></td><td><a href="report_card_view.php"><input id="buttonuser2" type="button" name="view" value="View" /></a></td></tr>
</table>
<?php
if(isset($_POST['submit']))
{
		$flight_id=$_POST['flight_id'];
		$flight_number=$_POST['flight_number'];
		$weekday_f=$_POST['weekday_f'];
		$dept_date=$_POST['dept_date'];
		$dept_state=$_POST['dept_state'];
		$arrival_state=$_POST['arrival_state'];
		$dept_time=$_POST['dept_time'];
		$arrival_time=$_POST['arrival_time'];
		$gate_f=$_POST['gate_f'];
		$remark_f=$_POST['remark_f'];
		
$sql="INSERT INTO `flight_rep`( `flight_id`, `flight_number`, `weekday_f`, `dept_date`, `dept_state`, `arrival_state`, `dept_time`, `arrival_time`, `gate_f`, `remark_f`) VALUES ('$flight_id', '$flight_number', '$weekday_f', '$dept_date', '$dept_state', '$arrival_state', '$dept_time', '$arrival_time', '$gate_f', '$remark_f')";
$res=mysql_query($sql) or die('Server error'.mysql_error());
if($res)
{
	echo("Register Successfully");
	header('location: report_card.php');
}
}
?>
</form>


</body>
</html>