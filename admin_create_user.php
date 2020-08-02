<?php session_start();?>  
<?php include('Include\connection2.php');?>
<!DOCTYPE html>
<html>
<head>
<link href="Husky_Design.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
    <title>Husky Air</title>
	<link rel="shortcut icon" href="Include/Hlogo.png" />
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
</head>
<body>
<?php include('navigate_bar_admin.php'); ?>



<form action="phppage.php" method="post" enctype="multipart/form-data">
<fieldset id="tabb">
<h1>Insert Data of Customer</h1>
<table>
<tr><td><input type="text" value="<?php echo $randomNumber = rand(1,1000000000); ?>" name="unique_id" readonly></td><td><select type="text" name="user_role">
<option>Select Role</option>
<option value="Admin">Admin</option>
<option value="Patient">Patient</option>
<option value="Hospital">Hospital</option>
<option value="Pilot">Pilot</option>
<option value="Aircraft">Aircraft</option>
<option value="OrganDonar">Organ Donar</option>
<option value="Doctor">Doctor</option>
</select></td></tr>
<tr><td><input type="text" placeholder="Username" name="username"></td><td><input type="text" placeholder="Password" name="password"></td></tr>
</table>
</fieldset>

<fieldset class="Admin box" id="tabb">
<h1>Admin Pannel</h1>
<table>
<tr><td><input type="text" placeholder="Admin Name" name="yyname"></td><td><input type="text" placeholder="Position" name="position"></td></tr>
<tr><td></td><td><input id="buttonuser2" type="submit" name="submit" value="Submit" ></td></tr>
</table>
</fieldset>

<fieldset class="Patient box" id="tabb">
<h1>Patient Pannel</h1>
<table>
<tr><td><input type="text" placeholder="Patient Name" name="nmname"></td><td><input type="text" placeholder="Address" name="nmaddress"></td></tr>
<tr><td><input type="text" placeholder="City" name="nmcity"></td><td><input type="text" placeholder="States" name="nmstates"></td></tr>
<tr><td><input type="text" placeholder="Postal Code" name="nmpostal"></td><td><input type="text" placeholder="Country" name="nmcountry"></td></tr>
<tr><td><input type="text" placeholder="Email ID" name="nmemail"></td><td><input type="text" placeholder="Mobile Number" name="nmmobile_no"></td></tr>
<tr><td><input type="text" placeholder="Weight per Kg" name="weight"></td><td><input type="text" placeholder="Luggage" name="luggage"></td></tr>
<tr><td><label>Treatment:</label><br>
<input type="checkbox" value="Diagnosis" name="treatment[]"><label for="Diagnosis">Diagnosis</label><br>
<input type="checkbox" value="Surgery" name="treatment[]"><label for="Surgery">Surgery</label><br>
<input type="checkbox" value="Other Treatment" name="treatment[]"><label for="Other Treatment">Other Treatment</label></td></tr>
<tr><td></td><td><input id="buttonuser2" type="submit" name="patient_submit" value="Submit" ></td></tr>
</table>
</fieldset>

<fieldset class="Hospital box" id="tabb">
<h1>Hospital Pannel</h1>
<table>
<tr><td><input type="text" placeholder="Hospital Name" name="hosname"></td><td><input type="text" placeholder="Address" name="hosaddress"></td></tr>
<tr><td><input type="text" placeholder="City" name="hoscity"></td><td><input type="text" placeholder="States" name="hosstates"></td></tr>
<tr><td><input type="text" placeholder="Postal Code" name="hospostal"></td><td><input type="text" placeholder="Country" name="hoscountry"></td></tr>
<tr><td><input type="text" placeholder="Email ID" name="hosemail"></td><td><input type="text" placeholder="Mobile Number" name="hosmobile_no"></td></tr>
<tr><td><label>Specialty:</label><br>
<input type="checkbox" value="Healty Care" name="specialty[]"><label for="Health Care">Health Care Center</label><br>
<input type="checkbox" value="Surgery" name="specialty[]"><label for="Surgery">Orthopedic Surgery</label><br>
<input type="checkbox" value="Diagnosis" name="specialty[]"><label for="Diagnosis">Diagnosis-Related Care Center</label><br>
<input type="checkbox" value="Other" name="specialty[]"><label for="Other Care Center">Other Care Center</label></td></tr>
<tr><td></td><td><input id="buttonuser2" type="submit" name="hospital_submit" value="Submit" ></td></tr>
</table>
</fieldset>

<fieldset class="Pilot box" id="tabb">
<h1>Pilot Pannel</h1>
<table>
<tr><td><input type="text" placeholder="Pilot Name" name="lnname"></td><td><input type="text" placeholder="Address" name="lnaddress"></td></tr>
<tr><td><input type="text" placeholder="City" name="lncity"></td><td><input type="text" placeholder="States" name="lnstates"></td></tr>
<tr><td><input type="text" placeholder="Postal Code" name="lnpostal"></td><td><input type="text" placeholder="Country" name="lncountry"></td></tr>
<tr><td><input type="text" placeholder="Email ID" name="lnemail"></td><td><input type="text" placeholder="Mobile Number" name="lnmobile_no"></td></tr>
<tr><td><input type="text" placeholder="Total Hours per Week" name="total_hrs"></td><td></td></tr>
<tr><td><label>Certification:</label><br>
<input type="checkbox" value="Sport Pilot" name="certification[]"><label for="Sport Pilot">Sport Pilot</label><br>
<input type="checkbox" value="Recreational Pilot" name="certification[]"><label for="Recreational Pilot">Recreational Pilot</label><br>
<input type="checkbox" value="Private Pilot" name="certification[]"><label for="Private Pilot">Private Pilot</label><br>
<input type="checkbox" value="Commercial Pilot" name="certification[]"><label for="Commercial Pilot">Commercial Pilot</label><br>
<input type="checkbox" value="Flight Instructor" name="certification[]"><label for="Flight Instructor">Flight Instructor</label><br>
<input type="checkbox" value="Airline Transport Pilot" name="certification[]"><label for="Airline Transport Pilot">Airline Transport Pilot</label></td>
<td><label>Rating:</label><br>
<input type="checkbox" value="TMG" name="rating[]"><label for="TMG">TMG</label><br>
<input type="checkbox" value="SEP(Land)" name="rating[]"><label for="SEP(Land)">SEP(Land)</label><br>
<input type="checkbox" value="SEP(Sea)" name="rating[]"><label for="SEP(Sea)">SEP(Sea)</label><br>
<input type="checkbox" value="SET" name="rating[]"><label for="SET">SET</label><br>
<input type="checkbox" value="MEP(Land)" name="rating[]"><label for="MEP(Land)">MEP(Land)</label><br>
<input type="checkbox" value="MEP(Sea)" name="rating[]"><label for="MEP(Sea)">MEP(Sea)</label></td></tr>
<tr><td></td><td><input id="buttonuser2" type="submit" name="pilot_submit" value="Submit" ></td></tr>
</table>
</fieldset>

<fieldset class="OrganDonar box" id="tabb">
<h1>Organ Donar Pannel</h1>
<table>
<tr><td><input type="text" placeholder="Organ Donar Name" name="adname"></td><td><input type="text" placeholder="Address" name="adaddress"></td></tr>
<tr><td><input type="text" placeholder="City" name="adcity"></td><td><input type="text" placeholder="States" name="adstates"></td></tr>
<tr><td><input type="text" placeholder="Postal Code" name="adpostal"></td><td><input type="text" placeholder="Country" name="adcountry"></td></tr>
<tr><td><input type="text" placeholder="Email ID" name="ademail"></td><td><input type="text" placeholder="Mobile Number" name="admobile_no"></td></tr>
<tr><td><input type="text" placeholder="Donating Organ" name="organ"></td></tr>
<tr><td></td><td><input id="buttonuser2" type="submit" name="organ_submit" value="Submit" ></td></tr>
</table>
</fieldset>

<fieldset class="Aircraft box" id="tabb">
<h1>Aircraft Pannel</h1>
<table>
<tr><td><input type="text" placeholder="Owner id" name="owner_unique_id"></td><td><input type="text" placeholder="Plane Type" name="type"></td></tr>
<tr><td><input type="text" placeholder="Airplane N Number" name="n_number"></td><td><input type="text" placeholder="Person Capacity" name="person_capacity"></td></tr>
<tr><td><label>Cargo:</label><br>
<input type="radio" value="Yes" name="cargo[]">Yes<br>
<input type="radio" value="No" name="cargo[]">No</td>
<td><label>Engine Type:</label><br>
<input type="radio" value="Single-Engine" name="engine[]">Single-Engine<br>
<input type="radio" value="Multi-Engine" name="engine[]">Multi-Engine</td></tr>
<tr><td></td><td><input id="buttonuser2" type="submit" name="aircraft_submit" value="Submit" ></td></tr>
</table>
</fieldset>

<fieldset class="Doctor box" id="tabb">
<h1>Doctor Pannel</h1>
<table>
<tr><td><input type="text" placeholder="Doctor Name" name="flname"></td><td><input type="text" placeholder="Address" name="address"></td></tr>
<tr><td><input type="text" placeholder="City" name="city"></td><td><input type="text" placeholder="States" name="states"></td></tr>
<tr><td><input type="text" placeholder="Postal Code" name="postal"></td><td><input type="text" placeholder="Country" name="country"></td></tr>
<tr><td><input type="text" placeholder="Email ID" name="email"></td><td><input type="text" placeholder="Mobile Number" name="mobile_no"></td></tr>
<tr><td><label>Specialist:</label><br>
<input type="checkbox" value="Diagnosis" name="specialist[]"><label for="Diagnosis">Diagnosis</label><br>
<input type="checkbox" value="Surgery" name="specialist[]"><label for="Surgery">Surgery</label><br>
<input type="checkbox" value="Other Treatment" name="specialist[]"><label for="Other Treatment">Other Treatment</label></td></tr>
<tr><td></td><td><input id="buttonuser2" type="submit" name="doctor_submit" value="Submit" ></td></tr>
</table>
</fieldset>
</form>
</body>
</html>