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
<?php include('navigate_bar_admin.php');?>

<table id="customers">
<tr>
<th>FLT#</th>
<th>Weekday</th>
<th>Date</th>
<th>Dept State</th>
<th>Arr State</th>
<th>Dept Time</th>
<th>Arr Time</th>
<th>Gate</th>
<th>Remarks</th>
</tr>

<?php 
$sql="SELECT * from flight_rep";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?><tr>
      <td><?php echo $row['flight_number'];?></td>
      <td><?php echo $row['weekday_f'];?></td>
      <td><?php echo $row['dept_date'];?></td>
      <td><?php echo $row['dept_state'];?></td>
      <td><?php echo $row['arrival_state'];?></td>
      <td><?php echo $row['dept_time'];?></td>
      <td><?php echo $row['arrival_time'];?></td>
      <td><?php echo $row['gate_f'];?></td>
      <td><?php echo $row['remark_f'];?></td>
      </tr>
      <?php 
  }
?>

</table>

</body>
</html>