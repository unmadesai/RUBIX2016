<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'registeration';
	
	$conn = mysql_connect($host, $user, $pass, $db);
	if(!$conn)
	{
		die('Could not connect:'.mysql_error());
	}
	
	$db_selected = mysql_select_db($db,$conn);
	
	if(!$db_selected)
	{
		die('Can\'t use'.$db.':'.mysql_error());
	}
	
	$fn = $_POST['fname'];
	$ln = $_POST['lname'];
	$cl = $_POST['clg'];
	$em = $_POST['email'];
	$no = $_POST['no'];
	
	$sql = "INSERT INTO register (fname,lname,clg,email,no) VALUES ('$fn','$ln','$cl','$em','$no')";
	
	if(!mysql_query($sql))
	{
		die('Error: '.mysql_error());
	}
	
	$subject = "Confirmation from CSI-TSEC";
	
	$message = "
	
	<html>
		<head>
			<title>Confirmation from CSI-TSEC</title>
		</head>
		<body>
		
		<p>Your registration for the event has been confirmed.</p>
		<br><br>
		<p>Please show this mail on the registration desk on the day of the event.</p>
		<br><br>
		<p>Thank You<br>CSI-TSEC</p>
		</body>
	</html>
	
	"
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <webmaster@example.com>' . "\r\n";
	$headers .= 'Cc: myboss@example.com' . "\r\n";
	
	mail($em,$subject,$message,$headers);
	mysql_close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RUBIX</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
  </head>
  <body>
    <div class="jumbotron">
	<div class="container">
	
	<h3>REGISTERATION FORM</h3>
	
	<p><!-- Accent-colored raised button with ripple -->

</p>
	</div>	
	</div>
		
	<!-- Textfield with Floating Label -->
<div class="container">
	
		<div class="jumbotron">
<form action="connection.php" id="group" method="post">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="fname" name="fname"  pattern="[A-Za-z\s]*">
    <label class="mdl-textfield__label" for="fname">FIRST NAME*</label>
	<span class="mdl-textfield__error">Invalid Input!</span>
  </div>
  <br>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="lname" name="lname" pattern="[A-Za-z\s]*">
    <label class="mdl-textfield__label" for="lname">LAST NAME*</label>
	<span class="mdl-textfield__error">Invalid Input!</span>
  </div>
  <br>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="clg" name="clg" pattern="[A-Za-z\s]*">
    <label class="mdl-textfield__label" for="clg">NAME OF YOUR COLLEGE*</label>
	<span class="mdl-textfield__error">Invalid Input!</span>
  </div>
  <br>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="email" id="email" name="email" ng-model="data.email" ng-required="true" />
                  <label class="mdl-textfield__label" for="email">EMAIL*</label>
                  <span class="mdl-textfield__error">Invalid email.</span>
                  </span>
                </div>
  <br>
  
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="no" id="no">
    <label class="mdl-textfield__label" for="no">PHONE NUMBER*</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>
  
  <br><br><br>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  Button
</button>
  </div>
  
</form>
	</div>
	</div>
	
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
  </body>
</html>