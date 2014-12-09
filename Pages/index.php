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
<body >
<body>
<p id="idd"></p>
<p id="time"></p>
<p id="sort">push the button</p>

<?php
require 'DBconnection.php';

$query="SELECT * FROM courses"; //courses is the name of the table
$result=mysql_query($query);
$num=mysql_num_rows($result);

echo "<script type=\"text/javascript\">\n";
echo "var Courselist = [];\n";
echo "var j = 0;\n";
$i=0;
$n=50;
$h=0;
while ($i < $n) {
$f1=mysql_result($result,$i,"ID");
$f2=mysql_result($result,$i,"Title");
$f3=mysql_result($result,$i,"Semesters");
$f4=mysql_result($result,$i,"Hours");
$f5=mysql_result($result,$i,"Time");
$i++;

echo "var classs${h} = {\n";
echo "    ID        : \"${f1}\",\n";
echo "    Title     : \"${f2}\",\n";
echo "    Semester  : \"${f3}\",\n";
echo "    Hours     : ${f4},\n";
echo "    Time      : \"${f5}\",\n";
echo "    TimeInt   : 0,\n";
echo "    GetTime   : function() { var temp; var tmp = this.Time; 
				   if(tmp.indexOf(\"11\") > -1 || tmp.indexOf(\"10\") > -1){
				      temp = this.Time.length - 20;
				      return this.Time.slice(temp, temp+8);}
				   else{ temp = this.Time.length - 19;			   
				      return this.Time.slice(temp, temp+8);}},\n";
echo "    Display   : function() { return this.ID+\"-\"+this.Title;}\n};\n";
echo "Courselist[${h}] = classs${h};\n";

$h++;
}
?>
</script>
<script>
function convert(str){
    if(str.indexOf("PM") > -1)
        str = convertPM(str);
    else 
        str = convertAM(str);

    return str;
}

function convertPM(str){
        if(str.indexOf("1") > -1 && str.indexOf("2") == -1){
	    if(str.indexOf("1") > 1)
	      return 13.1;
	    else if(str.indexOf("2") > 1)
	      return 13.2;
	    else if(str.indexOf("3") > 1)
	      return 13.3;
	    else if(str.indexOf("4") > 1)
	      return 13.4;
	    else if(str.indexOf("5") > 1)
	      return 13.5;
	    else
	      return 13.0;    
        }
        else if(str.indexOf("2") == 0 || str.indexOf("2") == 1 && (str.indexOf("1") > 1 || str.indexOf("1") == -1)){
	    if(str.indexOf("1") > 1)
	      return 14.1;
	    else if(str.indexOf("2") > 1)
	      return 14.2;
	    else if(str.indexOf("3") > 1)
	      return 14.3;
	    else if(str.indexOf("4") > 1)
	      return 14.4;
	    else if(str.indexOf("5") > 1)
	      return 14.5;
	    else
	      return 14.0;    
        }
        else if(str.indexOf("3") == 0 || str.indexOf("3") == 1){
            if(str.indexOf("1") > 1)
	      return 15.1;
	    else if(str.indexOf("2") > 1)
	      return 15.2;
	    else if(str.indexOf("3") > 1)
	      return 15.3;
	    else if(str.indexOf("4") > 1)
	      return 15.4;
	    else if(str.indexOf("5") > 1)
	      return 15.5;
	    else
	      return 15.0;    
        }
        else if(str.indexOf("4") == 0 || str.indexOf("4") == 1){
            if(str.indexOf("1") > 1)
	      return 16.1;
	    else if(str.indexOf("2") > 1)
	      return 16.2;
	    else if(str.indexOf("3") > 1)
	      return 16.3;
	    else if(str.indexOf("4") > 1)
	      return 16.4;
	    else if(str.indexOf("5") > 1)
	      return 16.5;
	    else
	      return 16.0;    
        }
        else if(str.indexOf("5") == 0 || str.indexOf("5") == 1){
            if(str.indexOf("1") > 1)
	      return 17.1;
	    else if(str.indexOf("2") > 1)
	      return 17.2;
	    else if(str.indexOf("3") > 1)
	      return 17.3;
	    else if(str.indexOf("4") > 1)
	      return 17.4;
	    else if(str.indexOf("5") > 1)
	      return 17.5;
	    else
	      return 17.0;    
        }
        else if(str.indexOf("6") == 0 || str.indexOf("6") == 1){
            if(str.indexOf("1") > 1)
	      return 18.1;
	    else if(str.indexOf("2") > 1)
	      return 18.2;
	    else if(str.indexOf("3") > 1)
	      return 18.3;
	    else if(str.indexOf("4") > 1)
	      return 18.4;
	    else if(str.indexOf("5") > 1)
	      return 18.5;
	    else
	      return 18.0;    
        }
        else if(str.indexOf("7") == 0 || str.indexOf("7") == 1){
            if(str.indexOf("1") > 1)
	      return 19.1;
	    else if(str.indexOf("2") > 1)
	      return 19.2;
	    else if(str.indexOf("3") > 1)
	      return 19.3;
	    else if(str.indexOf("4") > 1)
	      return 19.4;
	    else if(str.indexOf("5") > 1)
	      return 19.5;
	    else
	      return 19.0;    
        }
        else if(str.indexOf("8") == 0 || str.indexOf("8") == 1){
            if(str.indexOf("1") > 1)
	      return 20.1;
	    else if(str.indexOf("2") > 1)
	      return 20.2;
	    else if(str.indexOf("3") > 1)
	      return 20.3;
	    else if(str.indexOf("4") > 1)
	      return 20.4;
	    else if(str.indexOf("5") > 1)
	      return 20.5;
	    else
	      return 20.0;    
        }
        else if(str.indexOf("9") == 0 || str.indexOf("9") == 1){
            if(str.indexOf("1") > 1)
	      return 21.1;
	    else if(str.indexOf("2") > 1)
	      return 21.2;
	    else if(str.indexOf("3") > 1)
	      return 21.3;
	    else if(str.indexOf("4") > 1)
	      return 21.4;
	    else if(str.indexOf("5") > 1)
	      return 21.5;
	    else
	      return 21.0;    
        }
        else if(str.indexOf("10") > -1)
            return 22;
        else if(str.indexOf("11") > -1)
            return 23;
        else if(str == "")
	    return 0;
        else{
            if(str.indexOf("1", 2) > 1)
	      return 12.1;
	    else if(str.indexOf("2", 2) > 1)
	      return 12.2;
	    else if(str.indexOf("3", 2) > 1)
	      return 12.3;
	    else if(str.indexOf("4", 2) > 1)
	      return 12.4;
	    else if(str.indexOf("5", 2) > 1)
	      return 12.5;
	    else
	      return 12.0;    
        }
} 

function convertAM(str){
        if(str.indexOf("1") == 0 && str.indexOf("2") == -1 && str.indexOf("11") == -1 && str.indexOf("10") == -1){
	    if(str.indexOf("1", 1) > 1)
	      return 1.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 1.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 1.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 1.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 1.5;
	    else
	      return 1.0;    
        }
        else if(str.indexOf("2") == 0 && (str.indexOf("1") > 0 || str.indexOf("4") > 0 || str.indexOf("3") > 0 || str.indexOf("5") > 0 && str.indexOf("0") > 0)){
	    if(str.indexOf("1", 1) > 1)
	      return 2.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 2.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 2.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 2.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 2.5;
	    else
	      return 2.0;    
        }
        else if(str.indexOf("3") == 0 || str.indexOf("3") == 1){
	    if(str.indexOf("1", 1) > 1)
	      return 3.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 3.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 3.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 3.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 3.5;
	    else
	      return 3.0;    
        }
        else if(str.indexOf("4") == 0 || str.indexOf("4") == 1){ 
	    if(str.indexOf("1", 1) > 1)
	      return 4.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 4.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 4.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 4.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 4.5;
	    else
	      return 4.0;    
        }
        else if(str.indexOf("5") == 0 || str.indexOf("5") == 1){
            if(str.indexOf("1", 1) > 1)
	      return 5.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 5.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 5.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 5.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 5.5;
	    else
	      return 5.0;    
        }
        else if(str.indexOf("6") == 0 || str.indexOf("6") == 1){
	    if(str.indexOf("1", 1) > 1)
	      return 6.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 6.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 6.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 6.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 6.5;
	    else
	      return 6.0;    
        }
        else if(str.indexOf("7") == 0 || str.indexOf("7") == 1){
            if(str.indexOf("1", 1) > 1)
	      return 7.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 7.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 7.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 7.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 7.5;
	    else
	      return 7.0;    
        }
        else if(str.indexOf("8") == 0 || str.indexOf("8") == 1){
	    if(str.indexOf("1", 1) > 1)
	      return 8.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 8.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 8.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 8.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 8.5;
	    else
	      return 8.0;    
        }
        else if(str.indexOf("9") == 0 || str.indexOf("9") == 1){
	    if(str.indexOf("1", 1) > 1)
	      return 9.1;
	    else if(str.indexOf("2", 1) > 1)
	      return 9.2;
	    else if(str.indexOf("3", 1) > 1)
	      return 9.3;
	    else if(str.indexOf("4", 1) > 1)
	      return 9.4;
	    else if(str.indexOf("5", 1) > 1)
	      return 9.5;
	    else
	      return 9.0;    
        }
        else if(str.indexOf("10") >= 0){ 
	    if(str.indexOf("1", 2) > 1)
	      return 10.1;
	    else if(str.indexOf("2", 2) > 1)
	      return 10.2;
	    else if(str.indexOf("3", 2) > 1)
	      return 10.3;
	    else if(str.indexOf("4", 2) > 1)
	      return 10.4;
	    else if(str.indexOf("5", 2) > 1)
	      return 10.5;
	    else
	      return 10.0;    
        }
        else if(str.indexOf("12") >= 0){
	    if(str.indexOf("1", 2) > 1)
	      return 12.1;
	    else if(str.indexOf("2", 2) > 1)
	      return 12.2;
	    else if(str.indexOf("3", 2) > 1)
	      return 12.3;
	    else if(str.indexOf("4", 2) > 1)
	      return 12.4;
	    else if(str.indexOf("5", 2) > 1)
	      return 12.5;
	    else
	      return 12.0;    
        }
        else if(str == "")
	    return 0;
        else if(str.indexOf("11") >= 0){
	    if(str.indexOf("1", 2)  > 1)
	      return 11.1;
	    else if(str.indexOf("2", 2)  > 1)
	      return 11.2;
	    else if(str.indexOf("3", 2)  > 1)
	      return 11.3;
	    else if(str.indexOf("4", 2)  > 1)
	      return 11.4;
	    else if(str.indexOf("5", 2)  > 1)
	      return 11.5;
	    else
	      return 11.0;    
        }
        else
	  return -1;
} 

function sortList(){
  for(var p = 0; p < 50; p++){
    var teim = Courselist[p].GetTime();
    var teem = convert(teim);
    Courselist[p].TimeInt = teem;
  }
  Courselist.sort(function(a,b){
      return a.TimeInt - b.TimeInt;
  })
  var output = "";
  var x;
  for(x = 0; x < 50; x++){
      output += Courselist[x].Display() + "<br>";
  }
 return output;
}
    
//for(var h = 0; h < 50; h++){
//document.getElementById("idd").innerHTML += Courselist[h].Display() + "<br>";
//}
</script>
			
	<!-- Login Page -->
	<div id = "Login" data-role = "page" 
			style="margin:0 auto; 
				margin-left:auto; 
				margin-right:auto; 
				align:center; 
				text-align:center;">
		<div data-role = "header">
			<h1>	Dinger Docket Duelist </h1>
			<?php require 'http://csce.uark.edu/~rrochada/FFFF/Logout.php' ?>
		</div>
		<div class = "center-it">
			<form action="http://csce.uark.edu/~rrochada/FFFF/LoginProcessing.php" onSubmit="return validateFormLogin();" method="post" name="LoginForm">
				<fieldset data-role="controlgroup" data-type="horizontal" >
					E-mail: <input id="email" type="text" name="email"><br>
					Password: <input type="password" name="password"><br>
					<input type="submit" value = "Submit" > 

					<a href="#ForgotPassword" role = "button" class="ui-btn ui-corner-all ui-btn-inline ">
						Forgot password
					</a>
					<a href="#Registration" role = "button" class="ui-btn ui-corner-all ui-btn-inline ">
						Register
					</a>
				</fieldset>
			<form>
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
	<div id = "ForgotPassword" data-role = "page"
			style="margin:0 auto;
			margin-left:auto;
			margin-right:auto;
			align:center;
			text-align:center;">
		<fieldset data-role="controlgroup" data-type="horizontal">
			<form action="http://csce.uark.edu/~rrochada/FFFF/ForgotPasswordProcessing.php" onSubmit="return validateForgotPass();" method="post" name="ForgPassForm">
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
	<div id = "ResendCode" data-role = "page"
			style="margin:0 auto;
			margin-left:auto;
			margin-right:auto;
			align:center;
			text-align:center;">
		<fieldset data-role="controlgroup" data-type="horizontal">
			<form action="http://csce.uark.edu/~rrochada/FFFF/ResendCodeProcessing.php" onSubmit="return validateResendConf();" method="post" name="ResendConfForm">
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
	<div id = "EmailConfirmation" data-role = "page"
			style="margin:0 auto;
			margin-left:auto;
			margin-right:auto;
			align:center;
			text-align:center;">
		<fieldset data-role="controlgroup" data-type="horizontal">
			<form action="http://csce.uark.edu/~rrochada/FFFF/EmailConfirmationProcessing.php" onSubmit="return validateConf();" method="post" name="EmailConfForm">
				E-mail: <input type="text" name="email" value = ""><br>
				Insert your code: <input type="text" name="confirmation_code" value=""><br><br>
				<input type="submit" value = "Submit">
			</form>
		</fieldset>

		<br><br>
		<a href="index.php#ResendCode" class="ui-btn ui-corner-all ui-btn-inline">Resend code</a></br>
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
	<div id = "Registration" data-role = "page"
			style="margin:0 auto;
			margin-left:auto;
			margin-right:auto;
			align:center;
			text-align:center;">
		<fieldset data-role="controlgroup" data-type="horizontal">
			<form action="http://csce.uark.edu/~rrochada/FFFF/RegistrationProcessing.php" onSubmit="return validateFormReg();" method="post" name="RegisterForm">
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
	<div id = "Profile" data-role = "page"
			style="margin:0 auto;
			margin-left:auto;
			margin-right:auto;
			align:center;
			text-align:center;">
		<div data-role = "header">
			<h1>
				D D D
			</h1>
			<h2>
				Profile
			</h2>
		</div>
	
		<div data-role = "content" class="ui-content" data-inline = "true" >
			<fieldset data-role="controlgroup" data-type="horizontal">
				<form action="http://csce.uark.edu/~rrochada/FFFF/LoginProcessing.php" onSubmit="return validateFormLogin();" method="post" name="LoginForm">
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
		<div data-role = "content" class="ui-contain-center">
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
	<div id = "ChangePassword" data-role = "page"
			style="margin:0 auto;
			margin-left:auto;
			margin-right:auto;
			align:center;
			text-align:center;">
		<div data-role = "header">
			<h1> Change Password </h1>
		</div>

		<fieldset data-role="controlgroup" data-type="horizontal">
			<form action="http://csce.uark.edu/~rrochada/FFFF/ChangePasswordProcessing.php" onSubmit="return validateFormChangePass();" method="post" name="ChangePassForm">
				Current password: <input type="password" name="cur_pass"><br>
				New password: <input type="password" name="new_pass"><br>
				New password again: <input type="password" name="new_pass_conf"><br>
				<input type="submit" value = "Submit"></input>

			</form>

		</fieldset>
		
		<a href="javascript:history.go(-1)" role = "button" class="ui-btn ui-corner-all ui-btn-inline">
			Cancel
		</a>
		
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
	<div id = "Search" onload="makeList()" data-role = "page"
			style="margin:0 auto;
			margin-left:auto;
			margin-right:auto;
			align:center;
			text-align:center;">
			
						<script> 
						function makeList(){
						
						for(var k = 0; k < 50; k++){
						    var o = document.createElement("LI");
						    o.setAttribute("id", "add");
						    var d = document.createElement("INPUT");
						    d.setAttribute("type", "checkbox");
						    d.setAttribute("name", Courselist[k].Title);
						    d.setAttribute("id", Courselist[k].ID);
						    d.setAttribute("class", "custom");
						    var l = document.createElement("LABEL");
						    l.setAttribute("for", Courselist[k].ID);
						    var t = document.createTextNode(Courselist[k].Display());
						    l.appendChild(t);
						    document.o.appendChild(l);
						    document.o.appendChild(d);
						    var ul = document.getElementById("myform");
						    ul.insertBefore(o, ul.childNodes[0]);
						}
						
						
						}
						</script>
			
		<div data-role = "header">
			<h2>Search for New classes</h2>
		</div>

		<div>
			<fieldset  data-role="controlgroup" data-type="horizontal">
				<div class="ui-field-contain">
				  <label for="name">Search Classes by time:</label>
				  <input type="text" name="name" id="name" value="Search Classes by time: 8:00 am">
				</div>
				<div data-role = "content">
					<ul id="myform" data-role = "listview"  data-filter-placeholder = "Classes" data-inline ="false" data-inset = "true" data-filter = "true" data-filter-reveal="true">
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
		
		<fieldset data-role="controlgroup" data-type="horizontal">
			
			<!-- Error code -->
			<a href="#Sched" class="ui-btn ui-corner-all ui-btn-inline">
					
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
	
	<!-- Displaying Schedule -->
	<div id = "Sched" data-role = "page"
			style="margin:0 auto;
			margin-left:auto;
			margin-right:auto;
			align:center;
			text-align:center;">
			
		<div data-role = "header">
			<h2>First Schedule</h2>
		</div>
		
		<div data-role = "content">
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
								<td style="border-color:#CC9966;border-width:1px;border-style:Solid;font-size:12px;" align="center">2:15</td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;">JB <a style="background: none repeat scroll 0% 0% transparent ! important; border: medium none ! important; display: inline-block ! important; text-indent: 0px ! important; float: none ! important; font-weight: bold ! important; height: auto ! important; margin: 0px ! important; min-height: 0px ! important; min-width: 0px ! important; padding: 0px ! important; text-transform: uppercase ! important; text-decoration: underline ! important; vertical-align: baseline ! important; width: auto ! important;" title="Click to Continue > by WowCoupon" in_rurl="http://s.srv-itx.com/click?v=VVM6NzQ3OTU6NDpodW50aW5nOmE4YjEyNzBiNzlkYjM1MjYzMzhhMDcxOTVjY2NiZWEyOnotMTc1MC01MTExODE6dWFyay5jb2xsZWdlc2NoZWR1bGVyLmNvbToyMjgwMDg6OGFlNGZjZWEyOGU3ZGRlMjVmYjk1NjlkODgzZTdmMjE6NTEyOGFmNDM5M2Y5NGQ2MWJmNDVkZjA1ODgyZTFkNjA6MTpkYXRhX2ZiLG5vOzo0OTc1NjI5&amp;subid=g-511181-41a40ceee4eb41e5afb3f29f50925fd0-&amp;data_fb=no&amp;data_tagname=TD" id="_GPLITA_0" href="#">Hunt<img style="background: none repeat scroll 0% 0% transparent ! important; border: medium none ! important; display: inline-block ! important; text-indent: 0px ! important; float: none ! important; font-weight: bold ! important; height: 10px ! important; margin: 0px 0px 0px 3px ! important; min-height: 0px ! important; min-width: 0px ! important; padding: 0px ! important; text-transform: uppercase ! important; text-decoration: underline ! important; vertical-align: super ! important; width: 10px ! important;" src="http://cdncache-a.akamaihd.net/items/it/img/arrow-10x10.png"></a> Ctr Acad Ex JBHT 0144</td><td></td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;">JB <a style="background: none repeat scroll 0% 0% transparent ! important; border: medium none ! important; display: inline-block ! important; text-indent: 0px ! important; float: none ! important; font-weight: bold ! important; height: auto ! important; margin: 0px ! important; min-height: 0px ! important; min-width: 0px ! important; padding: 0px ! important; text-transform: uppercase ! important; text-decoration: underline ! important; vertical-align: baseline ! important; width: auto ! important;" title="Click to Continue > by WowCoupon" in_rurl="http://s.srv-itx.com/click?v=VVM6NzQ3OTU6NDpodW50aW5nOjNmM2EyZDA5MDM1NWZjNjNhMDhjZmE1ZTFhODk1YTRiOnotMTc1MC01MTExODE6dWFyay5jb2xsZWdlc2NoZWR1bGVyLmNvbToyMjgwMDQ6N2YzMjEwODBiNWViZjEwNmE5NGM3NGIzYmM1Y2M4NGQ6MzY3ZmUxNzAxZDc3NGEwOWFlMTY1ODIzMzE0MTYxNWI6MTpkYXRhX2ZiLG5vOzo0OTc1NjI5&amp;subid=g-511181-41a40ceee4eb41e5afb3f29f50925fd0-&amp;data_fb=no&amp;data_tagname=TD" id="_GPLITA_1" href="#">Hunt<img style="background: none repeat scroll 0% 0% transparent ! important; border: medium none ! important; display: inline-block ! important; text-indent: 0px ! important; float: none ! important; font-weight: bold ! important; height: 10px ! important; margin: 0px 0px 0px 3px ! important; min-height: 0px ! important; min-width: 0px ! important; padding: 0px ! important; text-transform: uppercase ! important; text-decoration: underline ! important; vertical-align: super ! important; width: 10px ! important;" src="http://cdncache-a.akamaihd.net/items/it/img/arrow-10x10.png"></a> Ctr Acad Ex JBHT 0144</td><td class="GridBackSlashImage" style="background-color:LightSkyBlue;border-left: 2px solid black; border-right: 2px solid black;">JBHT <a style="background: none repeat scroll 0% 0% transparent ! important; border: medium none ! important; display: inline-block ! important; text-indent: 0px ! important; float: none ! important; font-weight: bold ! important; height: auto ! important; margin: 0px ! important; min-height: 0px ! important; min-width: 0px ! important; padding: 0px ! important; text-transform: uppercase ! important; text-decoration: underline ! important; 
vertical-align: baseline ! important; width: auto ! important;" title="Click to Continue > by WowCoupon" in_rurl="http://s.srv-itx.com/click?v=VVM6NzQ3OTU6NDp0ZWFjaGluZzpiYmRkZDUyNGI4NGJjZWE0YmI4M2Y1NTJmNDBlZGMxZDp6LTE3NTAtNTExMTgxOnVhcmsuY29sbGVnZXNjaGVkdWxlci5jb206MjIxMzY5OmI1N2ViZTQwNzdlODcxZGNlYzQyMmUxYjA1ZWRjOWQ2OmRiNzg1NTNmMTQ5NjRiNjhhZDdlYjk3ZWY5YmYxNGNlOjE6ZGF0YV9mYixubzs6NDQyMDk1NA&amp;subid=g-511181-41a40ceee4eb41e5afb3f29f50925fd0-&amp;data_fb=no&amp;data_tagname=TD" id="_GPLITA_2" href="#">Teaching<img style="background: none repeat scroll 0% 0% transparent ! important; border: medium none ! important; display: inline-block ! important; text-indent: 0px ! important; float: none ! important; font-weight: bold ! important; height: 10px ! important; margin: 0px 0px 0px 3px ! important; min-height: 0px ! important; min-width: 0px ! important; padding: 0px ! important; text-transform: uppercase ! important; text-decoration: underline ! important; vertical-align: super ! important; width: 10px ! important;" src="http://cdncache-a.akamaihd.net/items/it/img/arrow-10x10.png"></a> Lab JBHT 0235</td>
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
		</div>
	</div>
</body>
</html>

.center-it{
margin: 0 auto;
}
