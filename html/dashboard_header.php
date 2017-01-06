<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $pagename; ?></title>
		<meta author="DirectProfile" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="/html/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
		
	</head>

	<body>
			<nav class="navbar navbar-light bg-faded">
				<a class="navbar-brand" style="margin-left: 15%; margin-top: -2px;"><?php echo $pagename;?></a>
					<ul class="nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color: #01DF01;" href="#">Gameservers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color: #01DFD7;" href="#">TeamSpeak 3</a>
					</li>
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" style="color: #0275d8;" href="#" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>
					<div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
						<a class="dropdown-item" href="#">Programming/a>
						<a class="dropdown-item" href="#">Server Installation</a>
					</div>
					</li>
					</ul>
				<form class="form-inline float-xs-right" style="margin-right: 15%;">
					<a href="/login" class="btn btn-outline-primary" >Login</a>
					<a href="/register" class="btn btn-outline-primary" >Sign Up</a>
				</form>
			</nav>
	<div class="container" style="margin-top: 20px;">		