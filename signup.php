<?php
session_start();
include 'database.php';
$_SESSION['otp']=rand(100000,999999);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignUp for #HASH</title>
    <link rel="icon" href="img/pp.png" type="image/x-icon">
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Are you confused about anything?.Sign up for Pentapoll now and make your first poll.Let the world answer for you and go for the right one.">

  <meta name="keywords" content="poll,confused,question,answer,quest,query,inquiry,decision,vote,signin,login,SignUp,Pentapoll">
  <meta name="author" content="Mitesh Kumar">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="signup.css" />
	<script type="text/javascript" src="jquery.js"></script>
</head>
<style>

        @media(min-width: 993px){ 
	body{
        padding-top: 150px;
	background-color:#004B4E;
    	background-size: cover;
	}
        .heading-hidden{
                        display:none;
        }
.main-nav{
display: block;
}
.mobile-nav{
display: none !important;
}    
        }
        @media(max-width: 992px){
                body{
                padding-top: 0px;
              	background-color:#004B4E;
    	        background-size: cover;
                }
.main-nav{
display: none;
}
.mobile-nav{
display: block;
}    
        }
</style>
	
<!----------------------------------->
<body>
    <nav class="navbar navbar-fixed-top main-nav">
        <div style="width: 19rem;margin: 0 auto;">
            <a class="" href="#"> </a>
        </div>
    </nav>
    <nav class="navbar mobile-nav">
        <div style="width: 19rem;margin: 0 auto;">
            <a class="" href="#"> </a>
        </div>
    </nav>

    <div class="heading-hidden text-center " style="margin-top:-25px;"><p style="font-size:large;color:white;">Do you want never to miss health schemes?</p></div>
<!----------------------------------------------->
	
	
	<script>	
$(document).ready(function(){
	var username_error =false;
	var password_error =false;

	$("#username_error").css("visibility", "hidden");
	$("#password_error").css("visibility", "hidden");
	
	$("#signup_username").keyup(function(){
		check_username();		
	});
	$("#signup_emobile").keyup(function(){
		check_emobile();			
	});
	$("#signup_password").keyup(function(){
		check_password();		
	});
});	
	

	//-----------------------------------------------------------
		
	
	function check_username(){
		var username_length=$("#signup_username").val().length;
		if(username_length<5||username_length>20){
		$("#username_error").css("visibility", "visible");
			username_error=true;
		}else{
			$("#username_error").css("visibility", "hidden");
		}
	}
	
//----------------------------------------------------------
		function check_emobile(){
		$(document).ready(function(){	
		var user_email=$("#signup_emobile").val();
		$.post("email_check.php",{email:user_email},function(data){
		$("#emobile_error").html(data);
		 });
		 
});
	}
	
//----------------------------------------------------------------
	function check_password(){
		var password_length=$("#signup_password").val().length;
		if(password_length<5||password_length>20){
			$("#password_error").css("visibility", "visible");;
			password_error=true;
		}else{
			$("#password_error").css("visibility", "hidden");
		}
	}
	
	//---------------------------------------
		</script>
	
    <div class="container">
        <div class="signUpform col-md-4">
            <h2 class="custom-head">Sign up</h2>
	  
           <form action="signup.php" method="post" id="signup_form">
				<p class="custom-p" style="margin-bottom: 1rem;"><input class="custom-input" type="text" placeholder="username"name="username" required="required" id="signup_username"  minlength="5" maxlength="20"/><br><span class="signup_error errors" id="username_error" style="display: block;"><span style="color: red">*</span>Should be between 5-20 characters</span></p>  
				
				<p class="custom-p"><input class="custom-input" type="email" placeholder="Email ID" name="emobile" required="required" id="signup_emobile"/><br><span class="signup_error errors" id="emobile_error" style="display: block; color: red;">
				<?php
if(isset($_POST['signup']))
{
$query="SELECT * FROM signup WHERE emobile='{$_POST['emobile']}' "; 
$result = mysqli_query($con,$query);
$rowcount=mysqli_num_rows($result);
$record=mysqli_fetch_array($result);
if($rowcount>=1)
{
echo "*Email id already registered"; 
}
else
{
	$_SESSION["username"]=ucwords($_POST['username']);
	$_SESSION["emobile"]=$_POST['emobile'];
	$password=$_POST['password'];
	$_SESSION["password"]=$password;
	//-----------------------------------OTP EMAILING-------------------------------------
	
	error_reporting(E_ALL);
	require("PHPMailer_5.2.4/class.phpmailer.php");

	$mail=new PHPMailer();

	$mail->IsSMTP();
	$mail->SMTPDebug=0;
	$mail->From="mitesh@pentapoll.com";
	$mail->FromName="Hash";
	$mail->Host="smtp.zoho.com";
	$mail->SMTPSecure="ssl";
	$mail->Port=465;
	$mail->SMTPAuth=true;
	$mail->Username="mitesh@pentapoll.com";
	$mail->Password="Mitesh@98";
	$mail->AddAddress($_SESSION["emobile"],$_SESSION["emobile"]);
	$mail->AddReplyTo("mitesh@pentapoll.com","Hash");
	$mail->WordWrap=50;
	$mail->IsHTML(true);
	$mail->Subject='Hash';
	$mail->Body=$_SESSION['otp']." is your otp.Thank you for signup";
	$mail->Send();
//----------------------------------------------------------------
//----------------------------------------------------------------
	
	//mysqli_close($con);
	
	//header("Refresh:0.1 ; url=otp.php");
	?>
		<script>
		  window.location.href="otp.php";
	 </script>
	 <?php
	  	//window.location.href = "2ndphase.php";
	 
}
}			
?>
				
				</span></p>
					
				<p class="custom-p" style="margin-bottom: 1rem;"><input class="custom-input" type="password" placeholder="Password" name="password"required="required" id="signup_password" minlength="5" maxlength="20"/ style="margin-left: -.3rem;"><img src="images/eye.png" height="20" width="20" id="eye" onclick="if(password.type=='text')password.type='password'; else password.type='text';" style="margin-left:-2.3rem"><br><span class="signup_error errors" id="password_error" style="display:block;" ><span style="color: red">*</span>Should be between 5-20 characters</span></p>
				
				<p><span style="color: black;">By Signing Up, you agree<br>to our <a href="terms.html">Terms</a> and <a href="privacy.html">Privacy Policy</a></span><br><input type="submit" class="custom-button-1" value="Sign Up" id="signup" name="signup"><br><span>Already have an account? <a href="login.php">Log in.</a></span></p>
           
			
    
	<!----------------------------------------------- FORM ENDED -------------------------------------->
		
  
		</form>
        </div>  
	  
	</div>
<div class="footer-main text-center" style="width:100%;">
	<div class="container" style="padding-top:2rem;">
		<div class="col-xs-2 col-lg-2 text-center"><a href="About.html" style="color: white">About</a></div>
		<div class="col-xs-2 col-lg-2 text-center"><a href="blog.html" style="color: white">Blog</a></div>
		<div class="col-xs-2 col-lg-2 text-center"><a href="terms.html" style="color: white">Terms</a></div>
		<div class="col-xs-2 col-lg-2 text-center"><a href="#" style="color: white">Support</a></div>
		<div class="col-xs-2 col-lg-2 text-center"><a href="privacy.html" style="color: white">Privacy</a></div>
		<div class="col-xs-2 col-lg-2 text-center"><a href="#" style="color: white">F&#38;Q</a></div>
	</div>
	<div class="footer text-center" style="font-size: smaller;padding-top: 1.5rem;">
		<p><span style="color: #aaaaaa;">&copy; 2018 Hash</span></p>
	</div>
</div>
	</body>
</html>