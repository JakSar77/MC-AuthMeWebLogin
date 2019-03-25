<?php
// Code by JakubŠarm
// Spigot: https://www.spigotmc.org/members/kevinyoutube.109279/
// Server: https://www.wolfmc.cz/
// - 1. Database

	//Database connect
	$db_web_server   = '';
	$db_web_login    = '';
	$db_web_password = "";  
	$db_web_name     = '';
	$db_web_conn	 = mysqli_connect($db_web_server, $db_web_login, $db_web_password, $db_web_name);
	mysqli_select_db($db_web_conn, $db_web_name) or die("Error with database connetction.");
	
	//AuthMe settings
	# Table name = Server_AuthMe
	# Row username = username
	# Row realname = realname 
	# Row password = password
	# Row email    = email 

// - 2. Login settings

	//Background
	$Background_img 	= "src/images/background.jpg";
	$Background_size	= "cover";

	//Title
	$Title_page 	= "AuthMe Login v3"; //Page title
	$Title_login 	= "Login in"; //Login modal title

	//Login Page
	$Form_user_placeholder = "Your nickname or Email";
	$Form_pass_placeholder = "Your game password";

	$Form_login_btn = "Login in";

	$Form_dont_have_account_text 		= "Don’t have an account?";
	$Form_dont_have_account_link_text 	= "Sign Up";
	$Form_dont_have_account_link_url 	= "#"; //Your register page url

	//Errors Message
	$error_empty_player 	= "Username not entered.";
	$error_empty_password 	= "Password not entered.";

	$error_bad_player 	= "User not found.";
	$error_bad_password = "The password is incorrect.";

// - 3. Logout settings
	$Title_logout 	= "You are logged in"; 
	$Form_logout_btn 	= "Logout";
?>