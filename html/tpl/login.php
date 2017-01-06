<?php
	
	$error_msg = "";
	
	if (isset($_SESSION['userSession'])!="") {
		header("Location: userpanel.php");
		die();
	}
	
	if (isset($_POST['login'])) {
		$email = strip_tags($_POST['email']);
		$password = strip_tags($_POST['password']);
 
		$email = $DBcon->real_escape_string($email);
		$password = $DBcon->real_escape_string($password);
 
		$query = $DBcon->query("SELECT UserID, Email, Password FROM Accounts WHERE Email='$email'");
		$row=$query->fetch_array();
		$count = $query->num_rows; 
 
		if (md5($password, $row['password']) && $count==1) {
			$_SESSION['userSession'] = $row['UserID'];
			header("Location: userpanel.php");
		} else {
			$error_msg = "<div class='alert alert-danger'>
				<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Email or Password is wrong.
				</div>";
		}
		$DBcon->close();
	}
?>
	<form class="form-signin" style="margin-left: 35%;margin-right: 35%;" method="post">
        <h2 class="form-signin-heading" style="color: #0275d8;">Log In</h2>
		<h5>Enter your information below.</h5>
		<?php echo $error_msg; ?>
		<br>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" data-toggle="tooltip" data-placement="right" title="Enter your Email." required autofocus>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" data-toggle="tooltip" data-placement="right" title="Enter your password." style="margin-top: 6px;"  required>
		<br>
        <button class="btn btn-lg btn-primary btn-block" name="login" id="login" type="submit">Login</button>
    </form>