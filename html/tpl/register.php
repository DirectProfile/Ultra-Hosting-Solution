<?php
	$error_msg = "";
	
	if(isset($_POST['signup'])) {
		$firstname = strip_tags($_POST['firstname']);
		$lastname = strip_tags($_POST['lastname']);
		$email = strip_tags($_POST['email']);
		$upass = strip_tags($_POST['password']);
 
		$firstname = $DBcon->real_escape_string($firstname);
		$lastname = $DBcon->real_escape_string($lastname);
		$email = $DBcon->real_escape_string($email);
		$upass = $DBcon->real_escape_string($upass);

 
		$check_email = $DBcon->query("SELECT Email FROM Accounts WHERE Email='$email'");
		$count=$check_email->num_rows;
 
		if ($count==0) {
			$query = "INSERT INTO Accounts(Email,Firstname,Lastname,Password) VALUES ('$email','$firstname','$lastname','$upass')";
			
			if ($DBcon->query($query)) {
				$error_msg = "<div class='alert alert-success'>
							<span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span> Thanks for your registration! You can now log in.
						</div>";
			} else {
				$error_msg = "<div class='alert alert-danger'>
							<span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> There\'s an error, try it again later.
						</div>";
			}
		} else {
			$error_msg = "<div class='alert alert-danger'>
						<span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> This Email is already in use.
					</div>";  
		} 
		$DBcon->close();
	}
?> 
	<form class="form-signin" style="margin-left: 35%;margin-right: 35%;" method="post">
        <h2 class="form-signin-heading" style="color: #0275d8;">Create new account</h2>
		<h5>Fill out the required information below.</h5>
		<?php echo $error_msg; ?>
		<br>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" data-toggle="tooltip" data-placement="right" title="Enter your Email address." required autofocus>
		<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Firstname" data-toggle="tooltip" data-placement="right" title="Enter your first name." style="margin-top: 6px;" required autofocus>
		<input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname" data-toggle="tooltip" data-placement="right" title="Enter your last name." style="margin-top: 6px;"  required autofocus>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" data-toggle="tooltip" data-placement="right" title="Enter a password." style="margin-top: 6px;"  required>
		<br>
        <button class="btn btn-lg btn-primary btn-block" name="signup" id="signup" type="submit">Continue</button>
		<div class="after_registration" style="font-size: 13px;margin-top: 20px;margin-right: 20px;">
			You can recharge your credit and buy products after the registration.
		</div>	
    </form>