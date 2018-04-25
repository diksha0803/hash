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
    color:  #004B4E ;
    background-color: #f0f0f0;
}
            	.custom-button-1{
    background-color: #007f80;
    color: white;
    border: none;
    border-radius: 2rem;
    font-size: large;
    padding: 0 3rem;
    margin-bottom: 1rem;
  
}

.container {
    padding: 0px;
    border: 1px solid #4CAF50;
	background-color:white;
}
#form{
	position:static;
left:10px;
     top:50px;
			}
			
	
			.small{
				font-size: 05;
				color: black;
			}	
th, td {
	padding:5px;
}
             .topnav{overflow: hidden;
            height: 50px;
            background-color: #007F80;
                font-size: 40px;
                font-style:italic;
            }
			
	</style>
<body>
     <div  class="topnav" id="shiv">
      
<center>
HASH PORTAL</center>
    </div>
<center><h1>Family Member's input </h1></center>

<div class="container" style="background-color:white;" id="main-content">
	<div id="form">
<form action="schemeview.php" method="post">
<table>
<tr><td>Name</td><br><td><input type="text" placeholder="name" value="name" required></td><br></tr>
<tr><td>Birthday</td><br><td><input type="date" value="bday" name="bday"></td><br></tr>
<tr><td>Gender</td><br><td><select name="gender" id="gender">
  <option value="0">Female</option>
  <option value="1">Male</option>
</select></td><br></tr></table>
<table>
	<tr><td>Relation with the user</td><td><select name="family" id="family">
  <option value="01">Mother</option>
	<option value="02">Father</option>
	<option value="03">Son</option>
	<option value="04">Daughter</option>
	<option value="05">Wife</option>
	<option value="06">Husband</option>
</select></td></tr></table>

	
	<table><tr><td>Are you Suffering From Life Threating Disease </td><td><select name="cancer">																				<option value="0">No</option>
  															<option value="1">Yes</option>
															</select></td></tr>
  	
	</table>
		<p class="small">(*like cancer,heart,lungs disease)</p>
	
	<input type="submit" name="submit" id="submit" value="submit" class="custom-button-1">
	</form>	
	<center><button  class="custom-button-1" id="family_scheme_btn"> See Schemes for your family</button></center>
	</div>
	
	
  <div class="col-md-3"></div>
	
	</div>
	
	</body>
	</head>
</html>


<script>
$("#family_scheme_btn").click(function(){
  window.location.href = "schemeview.php";  
});

</script>