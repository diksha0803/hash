<?php
session_start();
error_reporting(0);
$isTouch = isset($_SESSION['emobile']);
if(!$isTouch)
{
	header('Location: signup.php');
}
else 
{
include 'database.php';
?>
<!--------------------------------------------------------------->

<?php
if($_SESSION['insert1']==1)		//SAVING FROM MULTIPLE RUN
{
	//------------------MAKING UNIQUE USERID-------------------------
	$user_id_unique=0;
	$_SESSION["user_id"]=rand(100000,999999);
	while($user_id_unique==0)
	{
		$query="SELECT `user_id` FROM `signup` WHERE user_id={$_SESSION["user_id"]}";
		$result = mysqli_query($con,$query);
		$rowcount=mysqli_num_rows($result);
		$record=mysqli_fetch_array($result);
		if($rowcount>=1)
		{
		$_SESSION["user_id"]=rand(100000,999999);
		$user_id_unique=0;
		}
		else
			$user_id_unique=1;
	}
	//===================INSERTING DATA==========================
	$q1="insert into signup (user_id,username,emobile,password)values({$_SESSION["user_id"]},'{$_SESSION["username"]}','{$_SESSION["emobile"]}','{$_SESSION["password"]}')";
	mysqli_query($con,$q1)  or die(mysqli_error($con));
	//===================UNSETTING SESSION VARIABLES=============
	$_SESSION['insert1']=0;
	
}
}
?>

<!----------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
   <title>#HASH</title>
    <link rel="icon" href="images/hlogo.jpg" type="image/x-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Are you confused about anything?.Sign up for Pentapoll now and make your first poll.Let the world answer for you and go for the right one.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
		<style>
		body{
    /*navbar-fixe clear fix*/
    padding-top: 95px;
    color:  #004B4E ;
    background-color: #f0f0f0;
}

.container {
    padding: 100px;
    border: 1px solid #4CAF50;
	background-color:white;
}
#form{
	position:static;
left:10px;
 top:100px;
			}
			
			.custom-button-1{
    background-color: #007f80;
    color: white;
    border: none;
    border-radius: 2rem;
    font-size: large;
    padding: 0 3rem;
    margin-bottom: 1rem;
    margin-top: 2rem;
}
			.small{
				font-size: 05;
				color: black;
			}			
			
	</style>
<body>

<div class="container" style="background-color:white;" id="main-content">
	<div id="form">
<form action="schemeview.php" method="post">
Gender:<select name="gender" id="gender">
  <option value="0">Female</option>
  <option value="1">Male</option>
</select>
	State:<select name="state" id="state">
  <option value="01">Andra Pradesh</option>
	<option value="02">Arunachal Pradesh</option>
	<option value="03">Assam</option>
	<option value="04">Bihar</option>
	<option value="05">Chhattisgarh</option>
	<option value="06">Goa</option>
	<option value="07">Gujarat</option>
	<option value="08">Haryana</option>
	<option value="09">Himachal Pradesh</option>
	<option value="10">Jammu and Kashmir</option>
	<option value="11">Jharkhand</option>
	<option value="12">Karnataka</option>
	<option value="13">Kerala</option>
	<option value="14">Madya Pradesh</option>
	<option value="15">Maharashtra</option>
	<option value="16">Manipur</option>
	<option value="17">Meghalaya</option>
	<option value="18">Mizoram</option>
	<option value="19">Nagaland</option>
	<option value="20">Orissa</option>
	<option value="21">Punjab</option>
	<option value="22">Rajasthan</option>
	<option value="23">Sikkim</option>
	<option value="24">Tamil Nadu</option>
	<option value="25">Tripura</option>
	<option value="26">Uttaranchal</option>
	<option value="27">Uttar Pradesh</option>
	<option value="28">West Bengal</option>
	<option value="29">Andaman and Nicobar Islands</option>
	<option value="30">Chandigarh</option>
	<option value="31">Dadar and Nagar Haveli</option>
	<option value="32">Daman and Diu</option>
	<option value="33">Delhi</option>
	<option value="34">Lakshadeep</option>
	<option value="35">Pondicherry</option>
	
</select>
BPL:<select name="bpl">
  <option value="0">No</option>
  <option value="1">Yes</option>
</select>
	Birthday:<input type="date" value="bday" name="bday"><br><br>
	
	Are you Suffering From Life Threating Diesease:<select name="cancer">																				<option value="0">No</option>
  															<option value="1">Yes</option>
															</select>
  	<p class="small">(*like cancer,heart,lungs disease)</p>	
	
	<input type="submit" name="submit" id="submit" value="submit" class="custom-button-1">
	</form>	
	</div>
	
	
  <div class="col-md-3"></div>
	
	</div>
	</body>
	</head>
</html>
























