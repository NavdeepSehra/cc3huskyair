<?php session_start();?>  
<?php include('Include\connection2.php');?>

#Admin Pannel Code
<?php
if(isset($_POST['submit']))
{
		$unique_id=$_POST['unique_id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$user_role=$_POST['user_role'];
		$name=$_POST['yyname'];
		$position=$_POST['position'];
$insert = "INSERT INTO `combine_user`(`unique_id`, `username`, `password`, `user_role`, `postdate`) VALUES ('$unique_id', '$username', MD5('".$password."'), '$user_role', '".date('y-m-d')."')";
$in = mysql_query($insert) or die('Server error'.mysql_error());
if($in == 1)
{
$insert1 = "INSERT INTO `admin_user`(`unique_id`, `yyname`, `position`, `postdate`) VALUES ('$unique_id', '$name', '$position', '".date('y-m-d')."')";
$in2 = mysql_query($insert1) or die('Server error'.mysql_error());
if($in2 == 1)
{	
	echo("Register Successfully");
	header('location: admin_create_user.php');
}
else
{
	echo("Not Registered");
	}
}
}
?>

#Patient Pannel Code
<?php
if(isset($_POST['patient_submit']))
{
		$unique_id=$_POST['unique_id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$user_role=$_POST['user_role'];
		$patient_name=$_POST['nmname'];
		$address=$_POST['nmaddress'];
		$city=$_POST['nmcity'];
		$states=$_POST['nmstates'];
		$postal=$_POST['nmpostal'];
		$country=$_POST['nmcountry'];
		$email=$_POST['nmemail'];
		$mobile_no=$_POST['nmmobile_no'];
		$weight=$_POST['weight'];
		$luggage=$_POST['luggage'];
		$a=$_POST['treatment'];
		$treatment=implode(',',$a);
$sql = "INSERT INTO `combine_user`(`unique_id`, `username`, `password`, `user_role`, `postdate`) VALUES ('$unique_id', '$username', MD5('".$password."'), '$user_role', '".date('y-m-d')."')";
$res = mysql_query($sql) or die('Server error'.mysql_error());
if($res == 1)
{
$sql1 = "INSERT INTO `patient_user`(`unique_id`, `nmname`, `nmaddress`, `nmcity`, `nmstates`, `nmpostal`, `nmcountry`, `nmemail`, `nmmobile_no`, `weight`, `luggage`, `treatment`, `postdate`) VALUES ('$unique_id', '$patient_name', '$address', '$city', '$states', '$postal', '$country', '$email', '$mobile_no', '$weight', '$luggage', '$treatment', '".date('y-m-d')."')";
$res2 = mysql_query($sql1) or die('Server error'.mysql_error());
if($res2 == 1)
{	
	echo"<script>alert('Register Successfully')</script>";
	header('location: admin_create_user.php');
}
else
{
	echo("Not Registered");
	}
}
}
?>

#Hospital Pannel Code
<?php
if(isset($_POST['hospital_submit']))
{
		$unique_id=$_POST['unique_id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$user_role=$_POST['user_role'];
		$hospital_name=$_POST['hosname'];
		$address=$_POST['hosaddress'];
		$city=$_POST['hoscity'];
		$states=$_POST['hosstates'];
		$postal=$_POST['hospostal'];
		$country=$_POST['hoscountry'];
		$email=$_POST['hosemail'];
		$mobile_no=$_POST['hosmobile_no'];
		$a=$_POST['specialty'];
		$specialty=implode(',',$a);
$sql = "INSERT INTO `combine_user`(`unique_id`, `username`, `password`, `user_role`, `postdate`) VALUES ('$unique_id', '$username', MD5('".$password."'), '$user_role', '".date('y-m-d')."')";
$res = mysql_query($sql) or die('Server error'.mysql_error());
if($res == 1)
{
$sql1 = "INSERT INTO `hospitals_user`(`unique_id`, `hosname`, `hosaddress`, `hoscity`, `hosstates`, `hospostal`, `hoscountry`, `hosemail`, `hosmobile_no`, `specialty`, `postdate`) VALUES ('$unique_id', '$hospital_name', '$address', '$city', '$states', '$postal', '$country', '$email', '$mobile_no', '$specialty', '".date('y-m-d')."')";
$res2 = mysql_query($sql1) or die('Server error'.mysql_error());
if($res2 == 1)
{	
	echo"<script>alert('Register Successfully')</script>";
	header('location: admin_create_user.php');
}
else
{
	echo("Not Registered");
	}
}
}
?>

#Pilot Pannel Code
<?php
if(isset($_POST['pilot_submit']))
{
		$unique_id=$_POST['unique_id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$user_role=$_POST['user_role'];
		$pilot_name=$_POST['lnname'];
		$address=$_POST['lnaddress'];
		$city=$_POST['lncity'];
		$states=$_POST['lnstates'];
		$postal=$_POST['lnpostal'];
		$country=$_POST['lncountry'];
		$email=$_POST['lnemail'];
		$mobile_no=$_POST['lnmobile_no'];
		$total_hrs=$_POST['total_hrs'];
		$a=$_POST['certification'];
		$certification=implode(',',$a);
		$ba=$_POST['rating'];
		$rating=implode(',',$ba);
$sql = "INSERT INTO `combine_user`(`unique_id`, `username`, `password`, `user_role`, `postdate`) VALUES ('$unique_id', '$username', MD5('".$password."'), '$user_role', '".date('y-m-d')."')";
$res = mysql_query($sql) or die('Server error'.mysql_error());
if($res == 1)
{
$sql1 = "INSERT INTO `pilots_user`(`unique_id`, `lnname`, `lnaddress`, `lncity`, `lnstates`, `lnpostal`, `lncountry`, `lnemail`, `lnmobile_no`, `total_hrs`, `certification`, `rating`, `postdate`) VALUES ('$unique_id', '$pilot_name', '$address', '$city', '$states', '$postal', '$country', '$email', '$mobile_no', '$total_hrs', '$certification', '$rating', '".date('y-m-d')."')";
$res2 = mysql_query($sql1) or die('Server error'.mysql_error());
if($res2 == 1)
{	
	echo"<script>alert('Register Successfully')</script>";
	header('location: admin_create_user.php');
}
else
{
	echo("Not Registered");
	}
}
}
?>

#Organ Donar Pannel Code
<?php
if(isset($_POST['organ_submit']))
{
		$unique_id=$_POST['unique_id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$user_role=$_POST['user_role'];
		$odonar_name=$_POST['adname'];
		$address=$_POST['adaddress'];
		$city=$_POST['adcity'];
		$states=$_POST['adstates'];
		$postal=$_POST['adpostal'];
		$country=$_POST['adcountry'];
		$email=$_POST['ademail'];
		$mobile_no=$_POST['admobile_no'];
		$organ=$_POST['organ'];
$sql = "INSERT INTO `combine_user`(`unique_id`, `username`, `password`, `user_role`, `postdate`) VALUES ('$unique_id', '$username', MD5('".$password."'), '$user_role', '".date('y-m-d')."')";
$res = mysql_query($sql) or die('Server error'.mysql_error());
if($res == 1)
{
$sql1 = "INSERT INTO `organ_donar_user`(`unique_id`, `adname`, `adaddress`, `adcity`, `adstates`, `adpostal`, `adcountry`, `ademail`, `admobile_no`, `organ`, `postdate`) VALUES ('$unique_id', '$odonar_name', '$address', '$city', '$states', '$postal', '$country', '$email', '$mobile_no', '$organ', '".date('y-m-d')."')";
$res2 = mysql_query($sql1) or die('Server error'.mysql_error());
if($res2 == 1)
{	
	echo"<script>alert('Register Successfully')</script>";
	header('location: admin_create_user.php');
}
else
{
	echo("Not Registered");
	}
}
}
?>

#Aircraft Pannel Code
<?php
if(isset($_POST['aircraft_submit']))
{
		$unique_id=$_POST['unique_id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$user_role=$_POST['user_role'];
		$owner_id=$_POST['owner_unique_id'];
		$type=$_POST['type'];
		$n_number=$_POST['n_number'];
		$a=$_POST['engine'];
		$engine=implode(',',$a);
		$ab=$_POST['cargo'];
		$cargo=implode(',',$ab);
		$person_capacity=$_POST['person_capacity'];
		$sql = "INSERT INTO `combine_user`(`unique_id`, `username`, `password`, `user_role`, `postdate`) VALUES ('$unique_id', '$username', MD5('".$password."'), '$user_role', '".date('y-m-d')."')";
$res = mysql_query($sql) or die('Server error'.mysql_error());
if($res == 1)
{
$sql1 = "INSERT INTO `aircraft_user`(`unique_id`, `owner_unique_id`, `type`, `n_number`, `engine`, `cargo`, `person_capacity`, `postdate`) VALUES ('$unique_id', '$owner_id', '$type', '$n_number', '$engine', '$cargo', '$person_capacity', '".date('y-m-d')."')";
$res2 = mysql_query($sql1) or die('Server error'.mysql_error());
if($res2 == 1)
{	
	echo"<script>alert('Register Successfully')</script>";
	header('location: admin_create_user.php');
}
else
{
	echo("Not Registered");
	}
}
}
?>

#Doctor Pannel Code
<?php
if(isset($_POST['doctor_submit']))
{
		$unique_id=$_POST['unique_id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$user_role=$_POST['user_role'];
		$doctor_name=$_POST['flname'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$states=$_POST['states'];
		$postal=$_POST['postal'];
		$country=$_POST['country'];
		$email=$_POST['email'];
		$mobile_no=$_POST['mobile_no'];
		$a=$_POST['specialist'];
		$specialist=implode(',',$a);
$sql = "INSERT INTO `combine_user`(`unique_id`, `username`, `password`, `user_role`, `postdate`) VALUES ('$unique_id', '$username', MD5('".$password."'), '$user_role', '".date('y-m-d')."')";
$res = mysql_query($sql) or die('Server error'.mysql_error());
if($res == 1)
{
$sql1 = "INSERT INTO `doctors_user`(`unique_id`, `flname`, `address`, `city`, `states`, `postal`, `country`, `email`, `mobile_no`, `specialist`, `postdate`) VALUES ('$unique_id', '$doctor_name', '$address', '$city', '$states', '$postal', '$country', '$email', '$mobile_no', '$specialist', '".date('y-m-d')."')";
$res2 = mysql_query($sql1) or die('Server error'.mysql_error());
if($res2 == 1)
{	
	echo"<script>alert('Register Successfully')</script>";
	header('location: admin_create_user.php');
}
else
{
	echo("Not Registered");
	}
}
}
?>