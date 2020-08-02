<!DOCTYPE html>
<html>
<head>
<link href="Husky_Design.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8" />
    <title>Husky Air</title>
</head>
<body class="backcol">
<img class="imgg" src="Include/Husky Full Logo.png">
<ul>
  <li><a href="dashboard_doctor.php">Home</a></li>
  
<?php 
$id=$_SESSION['Unique_ID'];
$sql="SELECT * FROM doctors_user where unique_id='$id'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result)
?>
  <li><a href="profile_doctor.php?id=<?php echo $row['unique_id']; ?>">Profile</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Welcome <?php echo $_SESSION['User']; ?> (<?php echo $_SESSION['Unique_ID']; ?>)</a>
    <div class="dropdown-content">
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>

</body>
</html>