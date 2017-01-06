<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $pagename; ?></title>
		<meta author="DirectProfile" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="/html/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="/html/css/jumbo.css" rel="stylesheet">
		<link href="/html/css/sticky.css" rel="stylesheet">
		<link href="/html/js/barba.js" rel="stylesheet">
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script> 
		
		<script type="text/javascript">
			/* <![CDATA[ */
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-20400278-1']);
			_gaq.push(['_trackPageview']);

			(function() {	
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

			(function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
			/* ]]> */
	</script>
		
	</head>

	<body>
	<?php	if (!isset($_SESSION['userSession'])) {	?>
			<nav class="navbar navbar-light bg-faded">
				<a class="navbar-brand" style="margin-left: 15%; margin-top: -2px;"><?php echo $pagename;?></a>
					<ul class="nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Gameservers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Voiceservers</a>
					</li>
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Other</a>
					<div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
						<a class="dropdown-item" href="#">Programming</a>
						<a class="dropdown-item" href="#">Server Installation</a>
					</div>
					</li>
					</ul>
				<form class="form-inline float-xs-right" style="margin-right: 15%;">
					<a href="/login" class="btn btn-outline-primary" >Login</a>
					<a href="/register" class="btn btn-outline-primary" >Sign Up</a>
				</form>
			</nav>
	<?php } else { ?>
					<?php
							$query = $DBcon->query("SELECT * FROM Accounts WHERE UserID=".$_SESSION['userSession']);
							$userInfo = $query->fetch_array();
					?>
					<nav class="navbar navbar-light bg-faded">
				<a class="navbar-brand" style="margin-left: 15%; margin-top: -2px;"><?php echo $pagename;?></a>
					<ul class="nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Gameservers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">TeamSpeak 3</a>
					</li>
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Others</a>
					<div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
						<a class="dropdown-item" href="#">Programming</a>
						<a class="dropdown-item" href="#">Server Installation</a>
					</div>
					</li>
					</ul>
				<form class="form-inline float-xs-right" style="margin-right: 15%;">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo $userInfo['Firstname'] . ' ' . $userInfo['Lastname'];?>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="/dashboard/edit/profile">Edit Profile</a>
							<a class="dropdown-item" href="/dashboard/products">My Products</a>
							<?php if($userInfo['Admin'] > 0) { ?>
								<a class="dropdown-item" href="/dashboard/admin">Administration</a>
							<?php } ?>
							<a class="dropdown-item" href="/logout">Logout</a>
						</div>
					</div>
				</form>
			</nav>
	<?php } ?>
	<div class="container" style="margin-top: 20px;">		