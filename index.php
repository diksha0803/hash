<!DOCTYPE html>
<html lang="en">
<head>
   <title>#HASH</title>
    <link rel="icon" href="images/hlogo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
		<style>
		body{
    /*navbar-fixe clear fix*/
    color:  #004B4E ;
    background-color: #E1E1E1;
}

.container {
	position:fixed;
	top:138px;
	left:50px;
	border: 1px solid black;
	width:600px;
	height:308px;
   
}
#form{
	position:static;
left:10px;
 top:10px;
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
.def {
	position:fixed;
	top:138px;
	right:50px;
	border: 1px solid black;
	width:600px;
	height:308px;
	font-size:30px;
    padding: 10px;
}
h1{
	font-size:50px;
    font-style: oblique;
}

            
            
            .topnav{overflow: hidden;
            height: 50px;
            background-color: #007F80;
                font-size: 40px;
                font-style:italic;
            }
			
	</style></head>
<body>
    <div  class="topnav" id="shiv">
      
<center>
<img src="images/logo.gif" height="40" width="40"><img src="images/H.png"></center>
    </div>
<div class="container" style="background-color:white;" id="main-content">
	<div id="form">
<table>
<tr>
<td>Gender</td><td><select name="gender" id="gender">
  <option value="0">Female</option>
  <option value="1">Male</option>
    </select></td></tr><br>
<tr>
	<td>State</td><td><select name="state" id="state">
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
    </select></td></tr><br>
<tr>
<td>
BPL</td><td><select name="bpl" id="bpl">
  <option value="0">No</option>
  <option value="1">Yes</option>
</select><td></tr><br><tr><td>
	DOB</td><td><input type="date" value="bday" name="bday" id="bday"></td><br><br></table>
	<table>
	<tr><td>
	Are you Suffering From Life Threating Diesease</td><td><select name="cancer" id="cancer">	<option value="0">No</option>
  															<option value="1">Yes</option>
															</select></td></tr></table>
																<p class="small">(*like cancer,heart,lungs disease)</p>
	
	<input type="submit" name="submit" id="submit" value="try !t" size=400 class="custom-button-1">
	
	</div>
	
	
  <div class="col-md-3"></div>
	
	</div>
	<div class="def" style="background-color:#FFFFFF"; id="main">
	<table>
	<tr>
	<td>
	 <div id="scheme_here"></div>
         </td></tr>
	</table>
	</div>
	<center><button  size=60 class="custom-button-1" id="register_btn">REGISTER</button></center>
	</body>
</html>

<script>
$("#register_btn").click(function(){
window.location="signup.php";	
});
	
	
$("#submit").click(function(){
var gender=$("#gender").val();
	var state=$("#state").val();
	var bpl=$("#bpl").val();
	var bday=$("#bday").val();
	var cancer=$("#cancer").val();
	
	$.post("get_scheme.php",{gender:gender,state:state,bpl:bpl,bday:bday,cancer:cancer},function(data){
		 $("#scheme_here").html(data);
		 });
});

</script>


















