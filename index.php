<?php
session_start();
include("functions.php");
$message="";
if(count($_POST)>0) {
	if( $_POST["user_name"] == "admin" and $_POST["password"] == "admin") {
		$_SESSION["user_id"] = 1001;
		$_SESSION["user_name"] = $_POST["user_name"];
		$_SESSION['loggedin_time'] = time();  
	} else {
		$message = "Invalid Username or Password!";
	}
}

if(isset($_SESSION["user_id"])) {
	if(!isLoginSessionExpired()) {
		header("Location:Home.php");
	} 
	else {
		header("Location: Logout.php?session_expired=1");
	}
}

if(isset($_GET["session_expired"])) {
	$message = "Login Session is Expired. Please Login Again";
}
?>
<html>

<head>
	<title>User Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
</head>

<body>
	<div class="container-sm  p-3 my-3 bg-dark border">
	<form name="frmUser" method="post" action="">
		<?php if($message!="") { ?>
		<div class="message">
			<?php echo $message; ?>
		</div>
		<?php } ?>
		<div class="table-responsive">
		<table border="0" cellpadding="10" cellspacing="1" width="100%" class="tblLogin">
			<tr class="tableheader">
				<td align="center" colspan="2">Enter Login Details</td>
			</tr>
			<tr class="tablerow">
				<td align="right">Username</td>
				<td><input class="form-control" type="text" name="user_name"></td>
			</tr>
			<tr class="tablerow">
				<td align="right">Password</td>
				<td><input class="form-control" type="password" name="password"></td>
			</tr>
			<tr class="tableheader">
				<td align="center" colspan="2"><button class="btn btn-primary">Submit</button></td>
			</tr>
		</table>
		</div>
	</form>
	</div>
</body>

</html>