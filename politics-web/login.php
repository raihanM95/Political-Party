<?php
include_once("login_dbo.php");

if(isset($_SESSION['email'])){
	header("Location:index_In.php");
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<link href="css/loginStyle.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
<body>
<div class="wrap">
<!-- strat-contact-form -->	
<div class="contact-form">
<!-- start-form -->
	<form class="contact_form" action="login_dbo.php" method="post" name="contact_form">
		<h1>Login Into Your Account</h1>
	    <ul>
	        <li>
	            <input type="email" class="textbox1" name="email" placeholder="Enter your email" required />
	            <span class="form_hint">Enter a valid email</span>
	             <p><img src="images/contact.png" alt=""></p>
	        </li>
	        <li>
	            <input type="password" name="website" class="textbox2" placeholder="Enter your password">
	            <p><img src="images/lock.png" alt=""></p>
	        </li>
		 </ul>
		    <?php
			/* display validation error here */
			if (isset($_SESSION['errorMessage'])){
				echo "<span style='color:red; padding:20px;'>Invalid username or password!</span>";
			}
			?>
       	 	<input type="submit" name="SignIn" value="Sign In"/>
			<div class="clear"></div>	
			<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember me</label>
		<div class="forgot">
			<a href="#">forgot password?</a>
		</div>	
		<div class="clear"></div>	
	</form>
<!-- end-form -->
<!-- start-account -->
<div class="account">
	<h2>Don' have an account?<a href="registration.php"> Sign Up!</a></h2>
    <div class="span"><a href="#"><img src="images/facebook.png" alt=""/><i>Sign In with Facebook</i><div class="clear"></div></a></div>	
    <div class="span1"><a href="#"><img src="images/twitter.png" alt=""/><i>Sign In with Twitter</i><div class="clear"></div></a></div>
    <div class="span2"><a href="#"><img src="images/gplus.png" alt=""/><i>Sign In with Google+</i><div class="clear"></div></a></div>
</div>	
<!-- end-account -->
<div class="clear"></div>	
</div>
<!-- end-contact-form -->
<div class="footer">
	<p>&copy; 2018 Joy Bangla. All Rights Reserved</p>
</div>
</div>
</body>
</html>