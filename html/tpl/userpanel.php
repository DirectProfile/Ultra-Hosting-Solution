<?php
	if (!isset($_SESSION['userSession'])) {
		header("Location: login.php");
	}
	
	$query = $DBcon->query("SELECT * FROM Accounts WHERE UserID=".$_SESSION['userSession']);
	$userInfo = $query->fetch_array();
?>
<div class="content">
	<h2>Welcome back, <?php echo $userInfo['Firstname'] . ' ' . $userInfo['Lastname']; ?>.</h2>
	<h5>Here you can go to your dashboard.</h5>
	<a href="/dashboard" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Got to my dashboard</a>
	<br><br><br>
	<h3>Your credit is: <strong><?php echo $userInfo['Credits'];?> EUR</strong> (<a href="/add/credits">Recharge credit</a>)</h3>
	<?php if($userInfo['Admin'] > 0) { ?>
		<h3 class="text-primary">( Logged in as Administrator / Staff )</h3>
	<?php }?>
</div>