<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.5">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <!-- <script src="java.js"></script> -->
  <?php session_start(); ?>
  
  
</head> 
<body>
	<!-- Login Page -->
	<div id = "Login" data-role = "page">
		<div data-role = "header">
			<h1>	Schedule Planner 1.0	</h1>
		</div>
		
		<fieldset data-role="controlgroup" data-type="horizontal">
			<form action="http://localhost/FeeFiFoFanner/LoginProcessing.php" onSubmit="return validateFormLogin();" method="post" name="LoginForm">
				E-mail: <input id="email" type="text" name="email"><br>
				Password: <input type="password" name="password"><br>
				<input type="submit" value = "Submit">
				<a href="#ForgotPassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
					Forgot password
				</a><br> 
				<a href="#Registration" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
					Register
				</a><br> 
			</form>
		</fieldset>
		
		<br><br>
		
		<!-- may need to change the address -->
		<div data-role = "content" class="ui-content">	
			<fieldset data-role="controlgroup" data-type="horizontal">

				
				<?php
					
					$email = $_SESSION['email'];
					echo "
						<script>
						document.forms['LoginForm']['email'].value = '$email';
						</script>
						";
				?>
			</fieldset>
		</div>
			
		<script>
			function validateFormLogin() {	
				var email = document.forms["LoginForm"]["email"].value;
				if (email.indexOf("@") <= -1) {
					alert("Please insert a valid email");
					return false;
				}
				
				var pass = document.forms["LoginForm"]["password"].value;	
				if (pass == "") {
					alert ("Please insert a password");
					return false;
				}	
					
				return true;
			}
		</script>
		
		<div data-role = "footer">
			<!-- Error Code -->
			<a href="#ForgotPassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ForgotPassword
			</a>
			<a href="#Profile" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Profile
			</a>
			<a href="#Login" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Login
			</a>
			<a href="#ResendCode" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ResendCode
			</a>
			<a href="#EmailConfirmation" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: EmailConfirmation
			</a>
			<a href="#Registration" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Registration
			</a>
			<a href="#ChangePassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ChangePassword
			</a>
			<a href="#Search" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Search
			</a>
			<!-- /Error Code -->
		</div>
	</div>
	
	<!-- Forgot Password Page -->
	<div id = "ForgotPassword" data-role = "page">
		<fieldset data-role="controlgroup" data-type="horizontal">
			<form action="http://localhost/FeeFiFoFanner/ForgotPasswordProcessing.php" onSubmit="return validateForgotPass();" method="post" name="ForgPassForm">
				E-mail: <input id="email" type="text" name="email" value = ""><br>
				<input type="submit" value = "Submit">
				
				<!-- <a type="submit" value = "Submit" class="ui-btn ui-corner-all ui-btn-inline"> Submit </a> -->
				<a href='#Login' class="ui-btn ui-corner-all ui-btn-inline">
					Cancel 
				</a>
			</form>
			
		</fieldset>
 		<script>
			function validateForgotPass()
			{
				return true;
			}
		</script> 
		<?php
			//Session already started
			$email = $_SESSION['email'];
			echo "
				<script>
				document.forms['ForgPassForm']['email'].value = '$email';
				</script>
				";
		?>
		
		<div data-role = "footer">
			<!-- Error Code -->
			<a href="#ForgotPassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ForgotPassword
			</a>
			<a href="#Profile" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Profile
			</a>
			<a href="#Login" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Login
			</a>
			<a href="#ResendCode" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ResendCode
			</a>
			<a href="#EmailConfirmation" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: EmailConfirmation
			</a>
			<a href="#Registration" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Registration
			</a>
			<a href="#ChangePassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ChangePassword
			</a>
			<a href="#Search" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Search
			</a>
			<!-- /Error Code -->
		</div>
	</div>
	
	<!-- Resend Comfirmation -->
	<div id = "ResendCode" data-role = "page">
		<fieldset data-role="controlgroup" data-type="horizontal">
			<form action="http://localhost/FeeFiFoFanner/ResendCodeProcessing.php" onSubmit="return validateResendConf();" method="post" name="ResendConfForm">
				E-mail: <input type="text" name="email" value = ""><br>
				<input type="submit">
			</form>
		</fieldset>
 
		<script>
			function validateResendConf() {	
				var email = document.forms["ResendConfForm"]["email"].value;
				var confirmation_code = document.forms["ResendConfForm"]["confirmation_code"].value;
				
				if (email.indexOf("@") <= -1) {
					alert("Please insert a valid email");
					return false;
				}
				
				return true;
			}
		</script>
		<div data-role = "footer">
			<!-- Error Code -->
			<a href="#ForgotPassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ForgotPassword
			</a>
			<a href="#Profile" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Profile
			</a>
			<a href="#Login" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Login
			</a>
			<a href="#ResendCode" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ResendCode
			</a>
			<a href="#EmailConfirmation" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: EmailConfirmation
			</a>
			<a href="#Registration" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Registration
			</a>
			<a href="#ChangePassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ChangePassword
			</a>
			<a href="#Search" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Search
			</a>
			<!-- /Error Code -->
		</div>
	</div>
	
	<!-- EmailConfirmation -->
	<div id = "EmailConfirmation" data-role = "page">
		<fieldset data-role="controlgroup" data-type="horizontal">
			<form action="http://localhost/FeeFiFoFanner/EmailConfirmationProcessing.php" onSubmit="return validateConf();" method="post" name="EmailConfForm">
				E-mail: <input type="text" name="email" value = ""><br>
				Insert your code: <input type="text" name="confirmation_code" value=""><br><br>
				<input type="submit" value = "Submit">
			</form>
		</fieldset>
		<?php
			//Session already started
			$email = $_SESSION['email'];
			echo "
					<script>
			document.forms['EmailConfForm']['email'].value = '$email';
		</script>
				";
		?>
		<br><br>
		- <a href="index.php#ResendCode">Resend code</a></br>
		<script>
		function validateConf() {	
			var email = document.forms["EmailConfForm"]["email"].value;
			var confirmation_code = document.forms["EmailConfForm"]["confirmation_code"].value;
			
			if (email.indexOf("@") <= -1) {
				alert("Please insert a valid email");
				return false;
			}
			
			if (confirmation_code == "") {
				alert ("Please insert code");
				return false;
			}
			
			return true;
		}
		</script>
		<div data-role = "footer">
			<!-- Error Code -->
			<a href="#ForgotPassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ForgotPassword
			</a>
			<a href="#Profile" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Profile
			</a>
			<a href="#Login" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Login
			</a>
			<a href="#ResendCode" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ResendCode
			</a>
			<a href="#EmailConfirmation" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: EmailConfirmation
			</a>
			<a href="#Registration" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Registration
			</a>
			<a href="#ChangePassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ChangePassword
			</a>
			<a href="#Search" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Search
			</a>
			<!-- /Error Code -->
		</div>
	</div>
	
	<!-- Register Page -->
	<div id = "Registration" data-role = "page">
		<fieldset data-role="controlgroup" data-type="horizontal">
			<form action="http://localhost/FeeFiFoFanner/RegistrationProcessing.php" onSubmit="return validateFormReg();" method="post" name="RegisterForm">
				E-mail: <input id="email" type="text" name="email"><br>
				Password: <input type="password" name="password"><br>
				Retype password: <input type="password" name="password_confirmation"><br>
				<input type="submit" value = "Submit">
			</form>
		</fieldset>
		<script>
		function validateFormReg() {	
			
			var email = document.forms["RegisterForm"]["email"].value;
			
			if (email.indexOf("@") <= -1) {
				alert("Please insert a valid email");
				return false;
			}
			
			var pass1 = document.forms["RegisterForm"]["password"].value;
			var pass2 = document.forms["RegisterForm"]["password_confirmation"].value;
			
			if (pass1.length < 4) {
				alert ("Please choose a password of at least 4 characters");
				return false;
			}
			
			if (pass1 != pass2) {
				alert ("Password confirmation does not match");
				return false;
			}	
				
			return true;
		}
		</script>
		<div data-role = "footer">
			<!-- Error Code -->
			<a href="#ForgotPassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ForgotPassword
			</a>
			<a href="#Profile" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Profile
			</a>
			<a href="#Login" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Login
			</a>
			<a href="#ResendCode" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ResendCode
			</a>
			<a href="#EmailConfirmation" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: EmailConfirmation
			</a>
			<a href="#Registration" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Registration
			</a>
			<a href="#ChangePassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ChangePassword
			</a>
			<a href="#Search" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Search
			</a>
			<!-- /Error Code -->
		</div>
	</div>
	
	<!-- Profile Page -->
	<div id = "Profile" data-role = "page">
		<div data-role = "header">
			<h2>
				Profile
			</h2>
		</div>
	
		<div data-role = "content" class="ui-content" data-inline = "true" >
			<fieldset data-role="controlgroup" data-type="horizontal">
				<form action="http://localhost/FeeFiFoFanner/LoginProcessing.php" onSubmit="return validateFormLogin();" method="post" name="LoginForm">
					E-mail: 
					<input id="email" type="text" name="email">
					Password: 
					<input type="password" name="password">
				</form>
			</fieldset>
		</div>
		
		<!-- select number hrs desired for the semester -->		
		<div data-role = "content" class="ui-contain" data-inline = "true">
			<div data-role="rangeslider">
				<label for="range-7a">
					Hrs Wanted:
				</label>
				<input name="range-7a" id="range-7a" min="0" max="26" value="0" type="range" />
				<label for="range-7b">
					Hrs Wanted:
				</label>
				<input name="range-7b" id="range-7b" min="0" max="26" value="100" type="range" />
			</div>
		</div>
		<!-- /select number hrs desired for the semester -->
		
		<!-- Choose Degree -->		
		<div data-role = "content" class="ui-contain">
			<fieldset>
				<div data-role="fieldcontain">
					<label for="select-based-flipswitch">
						Computer Science/Engineer:
					</label>
					<select id="select-based-flipswitch" data-role="flipswitch">
						<option value="cs">
							CS
						</option>
						<option value="ce">
							CE
						</option>
					</select>
				</div>
			</fieldset>
		</div>
		<!-- /Choose Degree -->
		
		<!-- Footer -->
		<div data-role = "footer" >
		
			<!-- Navigation Buttons -->
			<div data-role = "content" class="ui-content">	
				<fieldset data-role="controlgroup" data-type="horizontal">
					<input type = "submit" value = "Save"></input>
				
					<a href="#Search" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
						Search
					</a>
					<a href="#ChangePassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
						Change Password
					</a>
					<a href="#panelAddingClasses" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
						Open dialog	
					</a>
				</fieldset>	
			</div>
			<!-- /Navigation Buttons -->
			
			<!-- Error Code -->
			<a href="#ForgotPassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ForgotPassword
			</a>
			<a href="#Profile" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Profile
			</a>
			<a href="#Login" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Login
			</a>
			<a href="#ResendCode" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ResendCode
			</a>
			<a href="#EmailConfirmation" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: EmailConfirmation
			</a>
			<a href="#Registration" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Registration
			</a>
			<a href="#ChangePassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ChangePassword
			</a>
			<a href="#Search" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Search
			</a>
			<!-- /Error Code -->
			
		</div>
		<!-- /Footer -->

		<!-- Panel for Adding Classes -->
		<div data-role="panel" id="panelAddingClasses">
			<div data-role="header">
				<h2>
					Add Classes
				</h2>
			</div>
			
			<div role="main" class="ui-content">
				
				<!-- Search Field -->
				<div data-role = "content">
					<ul data-role = "listview"  data-filter-placeholder = "Classes" data-inline ="true" data-inset = "true" data-filter = "true" data-filter-reveal="true">
						<li data-role = "list-divider">
							CSCE
						</li>			
						<li>
							Programming Foundations 1
						</li>
						<li>
							Programming Foundations 2
						</li>
						<li>
							Software Engineering
						</li>
						<li>
							Paradigms
						</li>
						<li data-role = "list-divider">
							MATH
						</li>
						<li>
							Calculus 1
						</li>
						<li>
							Calculus 2
						</li>
						<li>
							Discreet Mathmatics
						</li>
					</ul>
				</div>	
			</div>
		</div>
		<!-- Panel for Adding Classes -->
		
	</div>

	<!-- Change Password page -->
	<div id = "ChangePassword" data-role = "page">
		<div data-role = "header">
			<h1> Change Password </h1>
		</div>
		<?php
			//Session already started
			$email = $_SESSION['email'];
			$entered_password = $_SESSION['entered_password'];
		?>
		<fieldset data-role="controlgroup" data-type="horizontal">
			<form action="http://localhost/FeeFiFoFanner/ChangePasswordProcessing.php" onSubmit="return validateFormChangePass();" method="post" name="ChangePassForm">
				Current password: <input type="password" name="cur_pass"><br>
				New password: <input type="password" name="new_pass"><br>
				New password again: <input type="password" name="new_pass_conf"><br>
				<input type="submit">
			</form>
		</fieldset>
		
		<br><br>
		<a href="javascript:history.go(-1)">Cancel</a><br>
		<script>
		function validateFormChangePass() {	
			var pass1 = document.forms["ChangePassForm"]["new_pass"].value;
			var pass2 = document.forms["ChangePassForm"]["new_pass_conf"].value;
			
			if (pass1.length < 4) {
				alert ("Please choose a password of at least 4 characters");
				return false;
			}
			
			if (pass1 != pass2) {
				alert ("Password confirmation does not match");
				return false;
			}	
				
			return true;
		}
		</script>
		<?php
		?>
		<div data-role = "footer">
			<!-- Error Code -->
			<a href="#ForgotPassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ForgotPassword
			</a>
			<a href="#Profile" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Profile
			</a>
			<a href="#Login" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Login
			</a>
			<a href="#ResendCode" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ResendCode
			</a>
			<a href="#EmailConfirmation" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: EmailConfirmation
			</a>
			<a href="#Registration" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Registration
			</a>
			<a href="#ChangePassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ChangePassword
			</a>
			<a href="#Search" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Search
			</a>
			<!-- /Error Code -->
		</div>
	</div>
	
	<!-- Search -->
	<div id = "Search" data-role = "page">
		<div data-role = "header">
			<h2>Search for New classes</h2>
		</div>
		<div>
			
		</div>
		<div>
			<fieldset  data-role="controlgroup" data-type="horizontal">
				<div class="ui-field-contain">
				  <label for="name">Search Classes by time:</label>
				  <input type="text" name="name" id="name" value="Search Classes by time: 8:00 am">
				</div>
				<div data-role = "content">
					<ul data-role = "listview"  data-filter-placeholder = "Classes" data-inline ="false" data-inset = "true" data-filter = "true" data-filter-reveal="true">
						<li data-role = "list-divider">
							CSCE
						</li>	
						<li>				
							<input type="checkbox" name="programming 1" id="checkbox-1a" class="custom">
							<label for="checkbox-1a">CSCE 2004 Programming 1</label>
						</li>
						<li>				
							<input type="checkbox" name="Programming 2" id="checkbox-2a" class="custom">
							<label for="checkbox-2a">CSCE 2014 Programming 2</label>
						</li>
						<li>
							<input type="checkbox" name="software Engineering" id="checkbox-3a" class="custom">
							<label for="checkbox-3a">CSCE 3050 Software Engineering</label>
						</li>
						<li>
							<input type="checkbox" name="Paradigms" id="checkbox-4a" class="custom">
							<label for="checkbox-4a">CSCE 3196 Paradigms</label>
						</li>
						
						<li data-role = "list-divider">
							MATH
						</li>
						<li>
							<input type="checkbox" name="Calculus 1 MATH" id="checkbox-1b" class="custom">
							<label for="checkbox-1b">MATH 2154 Calculus 1</label>
						</li>
						<li>
							<input type="checkbox" name="Calculus 2 MATH" id="checkbox-2b" class="custom">
							<label for="checkbox-2b">MATH 2256 Calculus 2</label>
						</li>
						<li>
							<input type="checkbox" name="Discreet Mathmatics MATH" id="checkbox-3b" class="custom">
							<label for="checkbox-3b">TOMB OBBY Discrete Mathmatics</label>
						</li>
					</ul>
				</div>
			</fieldset>
	
		</div>		
		
		<!-- Insert2 -->
		
		<fieldset data-role="controlgroup" data-type="horizontal">
			
			<!-- Error code -->
			<a href="#Register" class="ui-btn ui-corner-all ui-btn-inline">
					
				<table class="vsGrid" id="gvSchedule" style="border-collapse:collapse;" border="1" cellspacing="0">
					<tbody>
						<tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:2px;" align="center">
							</td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
								<strong>
								</strong>
								<!-- Image 
								<input name="gvSchedule$ctl12$ctl03" src="images/vsUnlock.gif" style="border-width:0px;" type="image">
								-->
							</td>
							<td></td>
							
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
								<strong>
								</strong>
							</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
								<strong>
								</strong>
							</td>
						</tr>
						<tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:2px;" align="center">
							</td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
							</td>
							
							<td></td>
							
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
							</td>
							
							<td></td>
							
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
							</td>
						</tr>
						<tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:2px;" align="center">
							</td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
							</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
							</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
							</td>
						</tr>
						<tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:2px;" align="center">
							</td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-bottom: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
							</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-bottom: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
							</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-bottom: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;"></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:2px;" align="center">
							</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
							<strong></strong></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">
							</td><td></td><td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
							</td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center"></td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
							</td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
					</tbody>
				</table>
			</a>
		</fieldset>
		
		
		<div style="text-align: center; padding-top: 5px;">
			<div>
				<table class="vsGrid" id="gvSchedule" style="border-collapse:collapse;" border="1" cellspacing="0">
					<tbody>
						<tr class="GridHeader" style="color:#black;font-size:12px;font-weight:bold;" align="center">
							<th scope="col" style="width:50px;"></th>
							
							<th scope="col" style="width:120px;">
								Monday
							</th>
							
							<th scope="col" style="width:120px;">
								Tuesday
							</th>
							
							<th scope="col" style="width:120px;">
								Wednesday
							</th>
							
							<th scope="col" style="width:120px;">
								Thursday
							</th>
							
							<th scope="col" style="width:120px;">
								Friday
							</th>
							
						</tr>
						<tr class="GridBackSlashImage"></tr>
				<!--		
						<tr></tr>
						<tr >
						</tr><tr >
						</tr><tr >
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr>
					-->
						<tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">
								8:30
							</td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
								<strong>
									MATH-2603C-001 LEC
								</strong>
			<!-- Image insert -->
							</td>
							<td></td>
							
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
								<strong>
									MATH-2603C-001 LEC
								</strong>
							</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
								<strong>
									MATH-2603C-001 LEC
								</strong>
							</td>
						</tr>
						<tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">
								8:45
							</td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
								Ozark Hall Classroom 0102
							</td>
							
							<td></td>
							
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
								Ozark Hall Classroom 0102
							</td>
							
							<td></td>
							
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
								Ozark Hall Classroom 0102
							</td>
						</tr>
						<tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">
								9:00	
							</td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
								Allan Cochran
							</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
								Allan Cochran
							</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">
								Allan Cochran
							</td>
						</tr>
						<tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">
								9:15
							</td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-bottom: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
							</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-bottom: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
							</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-bottom: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;"></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">
								9:30
							</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSalmon;border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
							<strong>MATH-2603C-D001 DRL</strong><input name="gvSchedule$ctl16$ctl01" src="images/vsUnlock.gif" style="border-width:0px;" type="image"></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">9:45</td><td></td><td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">Ozark Hall Classroom 0104</td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">10:00</td><td></td><td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;">Melissa Shabazz</td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">10:15</td><td></td><td class="GridBackSlashImage" style="background-color:LightSalmon;border-left: 2px solid black; border-right: 2px solid black;"></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">10:30</td><td></td><td class="GridBackSlashImage" style="background-color:LightSalmon;border-bottom: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;"></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">10:45</td><td></td><td></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">11:00</td><td></td><td></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">11:15</td><td></td><td></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">11:30</td><td></td><td></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">11:45</td><td></td><td></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">12:00</td><td></td><td></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">12:15</td><td></td><td></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">12:30</td><td></td><td></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">12:45</td><td></td><td></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">1:00</td><td></td><td></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">1:15</td><td></td><td></td><td></td><td></td><td></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">1:30</td><td></td><td></td><td></td><td></td><td></td>
							
						</tr>
						<tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">
								1:45
							</td>
							<td></td><td></td><td></td><td></td><td></td>	
						</tr>
						<tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">2:00</td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
								<strong>CSCE-2014-001 LEC</strong>
							<input name="gvSchedule$ctl34$ctl01" src="images/vsUnlock.gif" style="border-width:0px;" type="image"></td>
							<td></td>
							<td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
								<strong>CSCE-2014-001 LEC</strong>
								<input name="gvSchedule$ctl34$ctl03" src="images/vsUnlock.gif" style="border-width:0px;" type="image">
							</td>
							<td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-top: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;">
								<strong>CSCE-2014-L005 LAB</strong>
								<input name="gvSchedule$ctl34$ctl05" src="images/vsUnlock.gif" style="border-width:0px;" type="image">
							</td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">2:15</td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;">JB <a style="background: none repeat scroll 0% 0% transparent ! important; border: medium none ! important; display: inline-block ! important; text-indent: 0px ! important; float: none ! important; font-weight: bold ! important; height: auto ! important; margin: 0px ! important; min-height: 0px ! important; min-width: 0px ! important; padding: 0px ! important; text-transform: uppercase ! important; text-decoration: underline ! important; vertical-align: baseline ! important; width: auto ! important;" title="Click to Continue > by WowCoupon" in_rurl="http://s.srv-itx.com/click?v=VVM6NzQ3OTU6NDpodW50aW5nOmE4YjEyNzBiNzlkYjM1MjYzMzhhMDcxOTVjY2NiZWEyOnotMTc1MC01MTExODE6dWFyay5jb2xsZWdlc2NoZWR1bGVyLmNvbToyMjgwMDg6OGFlNGZjZWEyOGU3ZGRlMjVmYjk1NjlkODgzZTdmMjE6NTEyOGFmNDM5M2Y5NGQ2MWJmNDVkZjA1ODgyZTFkNjA6MTpkYXRhX2ZiLG5vOzo0OTc1NjI5&amp;subid=g-511181-41a40ceee4eb41e5afb3f29f50925fd0-&amp;data_fb=no&amp;data_tagname=TD" id="_GPLITA_0" href="#">Hunt<img style="background: none repeat scroll 0% 0% transparent ! important; border: medium none ! important; display: inline-block ! important; text-indent: 0px ! important; float: none ! important; font-weight: bold ! important; height: 10px ! important; margin: 0px 0px 0px 3px ! important; min-height: 0px ! important; min-width: 0px ! important; padding: 0px ! important; text-transform: uppercase ! important; text-decoration: underline ! important; vertical-align: super ! important; width: 10px ! important;" src="http://cdncache-a.akamaihd.net/items/it/img/arrow-10x10.png"></a> Ctr Acad Ex JBHT 0144</td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;">JB <a style="background: none repeat scroll 0% 0% transparent ! important; border: medium none ! important; display: inline-block ! important; text-indent: 0px ! important; float: none ! important; font-weight: bold ! important; height: auto ! important; margin: 0px ! important; min-height: 0px ! important; min-width: 0px ! important; padding: 0px ! important; text-transform: uppercase ! important; text-decoration: underline ! important; vertical-align: baseline ! important; width: auto ! important;" title="Click to Continue > by WowCoupon" in_rurl="http://s.srv-itx.com/click?v=VVM6NzQ3OTU6NDpodW50aW5nOjNmM2EyZDA5MDM1NWZjNjNhMDhjZmE1ZTFhODk1YTRiOnotMTc1MC01MTExODE6dWFyay5jb2xsZWdlc2NoZWR1bGVyLmNvbToyMjgwMDQ6N2YzMjEwODBiNWViZjEwNmE5NGM3NGIzYmM1Y2M4NGQ6MzY3ZmUxNzAxZDc3NGEwOWFlMTY1ODIzMzE0MTYxNWI6MTpkYXRhX2ZiLG5vOzo0OTc1NjI5&amp;subid=g-511181-41a40ceee4eb41e5afb3f29f50925fd0-&amp;data_fb=no&amp;data_tagname=TD" id="_GPLITA_1" href="#">Hunt<img style="background: none repeat scroll 0% 0% transparent ! important; border: medium none ! important; display: inline-block ! important; text-indent: 0px ! important; float: none ! important; font-weight: bold ! important; height: 10px ! important; margin: 0px 0px 0px 3px ! important; min-height: 0px ! important; min-width: 0px ! important; padding: 0px ! important; text-transform: uppercase ! important; text-decoration: underline ! important; vertical-align: super ! important; width: 10px ! important;" src="http://cdncache-a.akamaihd.net/items/it/img/arrow-10x10.png"></a> Ctr Acad Ex JBHT 0144</td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;">JBHT <a style="background: none repeat scroll 0% 0% transparent ! important; border: medium none ! important; display: inline-block ! important; text-indent: 0px ! important; float: none ! important; font-weight: bold ! important; height: auto ! important; margin: 0px ! important; min-height: 0px ! important; min-width: 0px ! important; padding: 0px ! important; text-transform: uppercase ! important; text-decoration: underline ! important; vertical-align: baseline ! important; width: auto ! important;" title="Click to Continue > by WowCoupon" in_rurl="http://s.srv-itx.com/click?v=VVM6NzQ3OTU6NDp0ZWFjaGluZzpiYmRkZDUyNGI4NGJjZWE0YmI4M2Y1NTJmNDBlZGMxZDp6LTE3NTAtNTExMTgxOnVhcmsuY29sbGVnZXNjaGVkdWxlci5jb206MjIxMzY5OmI1N2ViZTQwNzdlODcxZGNlYzQyMmUxYjA1ZWRjOWQ2OmRiNzg1NTNmMTQ5NjRiNjhhZDdlYjk3ZWY5YmYxNGNlOjE6ZGF0YV9mYixubzs6NDQyMDk1NA&amp;subid=g-511181-41a40ceee4eb41e5afb3f29f50925fd0-&amp;data_fb=no&amp;data_tagname=TD" id="_GPLITA_2" href="#">Teaching<img style="background: none repeat scroll 0% 0% transparent ! important; border: medium none ! important; display: inline-block ! important; text-indent: 0px ! important; float: none ! important; font-weight: bold ! important; height: 10px ! important; margin: 0px 0px 0px 3px ! important; min-height: 0px ! important; min-width: 0px ! important; padding: 0px ! important; text-transform: uppercase ! important; text-decoration: underline ! important; vertical-align: super ! important; width: 10px ! important;" src="http://cdncache-a.akamaihd.net/items/it/img/arrow-10x10.png"></a> Lab JBHT 0235</td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">2:30</td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;">Tingxin Yan</td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;">Tingxin Yan</td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;"></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">2:45</td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;"></td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;"></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;"></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">3:00</td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;"></td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;"></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;"></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">3:15</td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-bottom: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;"></td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-bottom: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;"></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;"></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">3:30</td><td></td><td></td><td></td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;"></td>
						</tr><tr class="GridBackSlashImage">
							<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">3:45</td><td></td><td></td><td></td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-bottom: 2px solid black; border-left: 2px solid black; border-right: 2px solid black;"></td>
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr><tr class="GridBackSlashImage">
						</tr>
					</tbody>
				</table>
			</div>					
		</div>
		<div data-role = "footer">
			<!-- Error Code -->
			<a href="#ForgotPassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ForgotPassword
			</a>
			<a href="#Profile" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Profile
			</a>
			<a href="#Login" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Login
			</a>
			<a href="#ResendCode" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ResendCode
			</a>
			<a href="#EmailConfirmation" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: EmailConfirmation
			</a>
			<a href="#Registration" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Registration
			</a>
			<a href="#ChangePassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: ChangePassword
			</a>
			<a href="#Search" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
				Temp: Search
			</a>
			<!-- /Error Code -->
		</div>
	</div>
</body>
</html>
<!--  Insert1
<div class="ui-block-a ui-content">
				<ul class="hide-items ui-listview ui-listview-inset ui-corner-all ui-shadow" data-role="listview" data-inset="true">
					<li class="ui-li-divider ui-bar-inherit ui-first-child" role="heading" data-role="list-divider">Mammals</li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item1">Dolphin</a></li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item2">Lemur</a></li>
					<li class="ui-li-divider ui-bar-inherit" role="heading" data-role="list-divider">Reptiles</li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item3">Cobra</a></li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item4">Gecko</a></li>
					<li class="ui-li-divider ui-bar-inherit ui-last-child" role="heading" data-role="list-divider">Fish</li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item5">Salmon</a></li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item6">Pollock</a></li>
				</ul>
			</div>
			
<div class="ui-block-b ui-content">
				<ul class="hide-items ui-listview ui-listview-inset ui-corner-all ui-shadow" data-role="listview" data-inset="true" data-hide-dividers="true">
					<li class="ui-li-divider ui-bar-inherit" role="heading" data-role="list-divider">Mammals</li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item1">Dolphin</a></li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item2">Lemur</a></li>
					<li class="ui-li-divider ui-bar-inherit ui-first-child" role="heading" data-role="list-divider">Reptiles</li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item3">Cobra</a></li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item4">Gecko</a></li>
					<li class="ui-li-divider ui-bar-inherit" role="heading" data-role="list-divider">Fish</li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item5">Salmon</a></li>
					<li class="ui-last-child"><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item6">Pollock</a></li>
				</ul>
			</div>
<div class="ui-content" role="main">
		<p>Click on the list items below to hide them. As you hide more and more items, you can observe the difference <code>hideDividers</code> makes.</p>
		<div class="ui-grid-a">
			<div class="ui-block-a ui-content">
				<p><code>hideDividers</code> option set to <code>false</code>.</p>
			</div>
			<div class="ui-block-b ui-content">
				<p><code>hideDividers</code> option set to <code>true</code>.</p>
			</div>
			<div class="ui-block-a ui-content">
				<ul class="hide-items ui-listview ui-listview-inset ui-corner-all ui-shadow" data-role="listview" data-inset="true">
					<li class="ui-li-divider ui-bar-inherit ui-first-child" role="heading" data-role="list-divider">Mammals</li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item1">Dolphin</a></li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item2">Lemur</a></li>
					<li class="ui-li-divider ui-bar-inherit" role="heading" data-role="list-divider">Reptiles</li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item3">Cobra</a></li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item4">Gecko</a></li>
					<li class="ui-li-divider ui-bar-inherit ui-last-child" role="heading" data-role="list-divider">Fish</li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item5">Salmon</a></li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item6">Pollock</a></li>
				</ul>
			</div>
			<div class="ui-block-b ui-content">
				<ul class="hide-items ui-listview ui-listview-inset ui-corner-all ui-shadow" data-role="listview" data-inset="true" data-hide-dividers="true">
					<li class="ui-li-divider ui-bar-inherit" role="heading" data-role="list-divider">Mammals</li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item1">Dolphin</a></li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item2">Lemur</a></li>
					<li class="ui-li-divider ui-bar-inherit" role="heading" data-role="list-divider">Reptiles</li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item3">Cobra</a></li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item4">Gecko</a></li>
					<li class="ui-li-divider ui-bar-inherit" role="heading" data-role="list-divider">Fish</li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item5">Salmon</a></li>
					<li><a class="ui-btn ui-btn-icon-right ui-icon-carat-r" href="#" data-role="hide-item6">Pollock</a></li>
				</ul>
			</div>
		</div>
		<div class="ui-grid-solo ui-content">
			<div class="ui-block-a">
				<a class="ui-btn ui-corner-all ui-shadow" id="restore" href="#">Restore</a>
			</div>
		</div>
	</div>		
	-->
	
	
	
	<!--
		  <div role="main" class="ui-content">
    <table data-role="table" id="my-table" data-mode="reflow">
      <thead>
        <tr>
          <th>Day</th>
          <th>8:00</th>
          <th>9:00</th>
          <th>10:00</th>
          <th>11:00</th>
          <th>12:00</th>
          <th>1300</th>
          <th>14:00</th>
          <th>15:00</th>
          <th>16:00</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>Monday</th>
          <td></td>
		  <td>Calculus 2</td>
		  <td></td>
		  <td>Programming 2</td>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td></td>
        </tr>   
		<tr>
          <th>Tuesday</th>
          <td></td>
		  <td>Dicrete Mathmatics</td>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td></td>
		  <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  -->
  
  	<!-- Login Page 
	<div id = "Login" data-role = "page">
		<div data-role = "header">
			<h1>	Schedule Planner	</h1>
		</div>
		
		<fieldset data-role="controlgroup" data-type="horizontal">
			<input id = "Email" class = "input" type = "text" value = "Email" data-form = "ui-body-a" data-theme = "a">
			<input id = "Password" class = "input" type = "text" value = "Password" data-form = "ui-body-a" data-theme = "a">
		</fieldset>
		
		<div role = "main" class="ui-content">
			<fieldset data-role="controlgroup" data-type="horizontal">
				<a href="#Profile" class="ui-btn ui-corner-all ui-btn-inline">
					Login
				</a>
				<a href="#Register" class="ui-btn ui-corner-all ui-btn-inline">
					Register
				</a>
			</fieldset>
		</div>
	</div>
	-->
  
  <!-- Registration
  <div id = "Register" data-role = "page">
		<div data-role = "header">
			<h2>Register</h2>
		</div>
		<div class="ui-field-contain">
			<label for="name">Email:</label>
			<input type="text" name="name" id="name" value="">
			<label for="name">Password:</label>
			<input type="text" name="name" id="name" value="">
			
			<label for="name">Retype Password:</label>
			<input type="text" name="name" id="name" value="">
		</div>
		
		<fieldset data-role="controlgroup" data-type="horizontal">
			<a href="#Profile" class="ui-btn ui-corner-all ui-btn-inline">
				Create
			</a>
		</fieldset>
	</div>
	-->
  
  <!-- Profile Page
  <div id = "Register" data-role = "page">
		<div data-role = "header">
			<h2>Register</h2>
		</div>
		<div class="ui-field-contain">
			<label for="name">User Name:</label>
			<input type="text" name="name" id="name" value="">
		</div>
		<div class="ui-field-contain">
			<label for="name">Password:</label>
			<input type="text" name="name" id="name" value="">
		</div>
		
		<div class="ui-field-contain">
		  <div data-role="rangeslider">
			<label for="range-7a">Hrs Wanted:</label>
			<input name="range-7a" id="range-7a" min="0" max="26" value="0" type="range" />
			<label for="range-7b">Hrs Wanted:</label>
			<input name="range-7b" id="range-7b" min="0" max="26" value="100" type="range" />
		  </div>
		</div>
		<fieldset>
			<div data-role="fieldcontain">
				<label for="select-based-flipswitch">Computer Science/Engineer:</label>
				<select id="select-based-flipswitch" data-role="flipswitch">
					<option value="cs">CS</option>
					<option value="ce">CE</option>
				</select>
			</div>
		</fieldset>
		
		<div data-role = "content">
			<ul data-role = "listview"  data-filter-placeholder = "Classes" data-inline ="true" data-inset = "true" data-filter = "true" data-filter-reveal="true">
				<li data-role = "list-divider">
					CSCE
				</li>			
				<li>
					Programming Foundations 1
				</li>
				<li>
					Programming Foundations 2
				</li>
				<li>
					Software Engineering
				</li>
				<li>
					Paradigms
				</li>
				<li data-role = "list-divider">
					MATH
				</li>
				<li>
					Calculus 1
				</li>
				<li>
					Calculus 2
				</li>
				<li>
					Discreet Mathmatics
				</li>
			</ul>
		</div>		
				<div role = "main" class="ui-content">
			<fieldset data-role="controlgroup" data-type="horizontal">
				<form action = "#" method = "get">
					<input type = "submit" value = "Save"></input>
				</form>
				<a href="#Search" class="ui-btn ui-corner-all ui-btn-inline">
					Search
				</a>
			</fieldset>
		</div>
		
		-->
  
