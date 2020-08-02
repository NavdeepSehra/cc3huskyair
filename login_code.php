<?php
session_start();
require_once "Include/connection1.php";
$message = "";
$role = "";
if(isset($_POST["submit"]))
{
	$username = $_POST["username"];
	$password = $_POST["password"];
	$query = "select * from combine_user where username='$username' and password='$password'";
	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			
			if($row["user_role"] == "Admin")
			{
				$_SESSION['User'] = $row["username"];
				$_SESSION['role'] = $row["user_role"];
				$_SESSION['Unique_ID'] = $row["unique_id"];
				header('location: dashboard_admin.php');
				}
				else if($row["user_role"] == "Patient")
				{
					$_SESSION['User'] = $row["username"];
					$_SESSION['role'] = $row["user_role"];
					$_SESSION['Unique_ID'] = $row["unique_id"];
					header('location: dashboard_patient.php');
					}
				else if($row["user_role"] == "Doctor")
				{
					$_SESSION['User'] = $row["username"];
					$_SESSION['role'] = $row["user_role"];
					$_SESSION['Unique_ID'] = $row["unique_id"];
					header('location: dashboard_doctor.php');
					}
				else if($row["user_role"] == "Pilot")
				{
					$_SESSION['User'] = $row["username"];
					$_SESSION['role'] = $row["user_role"];
					$_SESSION['Unique_ID'] = $row["unique_id"];
					header('location: dashboard_pilot.php');
					}
				else if($row["user_role"] == "Aircraft")
				{
					$_SESSION['User'] = $row["username"];
					$_SESSION['role'] = $row["user_role"];
					$_SESSION['Unique_ID'] = $row["unique_id"];
					header('location: dashboard_aircraft.php');
					}
				else if($row["user_role"] == "Hospital")
				{
					$_SESSION['User'] = $row["username"];
					$_SESSION['role'] = $row["user_role"];
					$_SESSION['Unique_ID'] = $row["unique_id"];
					header('location: dashboard_hospital.php');
					}
				else if($row["user_role"] == "OrganDonar")
				{
					$_SESSION['User'] = $row["username"];
					$_SESSION['role'] = $row["user_role"];
					$_SESSION['Unique_ID'] = $row["unique_id"];
					header('location: dashboard_odonar.php');
					}			
			}
		}
		else
		{
			header('Location: index.php');
			}
	}
?>