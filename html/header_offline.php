<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $pagename; ?></title>
		<meta author="DirectProfile" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="/html/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
	</head>

	<body>
			<nav class="navbar navbar-light bg-faded">
				<a class="navbar-brand" style="margin-left: 15%; margin-top: -2px;"><?php echo $pagename?></a>
					<ul class="nav navbar-nav">
					<li class="nav-item">
						<span class="nav-link" style="color: red;" href="index.php">MySQL Error</span>
					</li>
				<form class="form-inline float-xs-right" style="margin-right: 15%;">
					<a href="/" onclick="this.firstChild.nodeValue = 'Reloading page..'" class="btn btn-outline-primary" >Reload page</a>
				</form>
			</nav>
	<div class="container" style="margin-top: 20px;">		