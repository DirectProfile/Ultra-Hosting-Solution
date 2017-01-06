<?php
	
	$DBcon = new MySQLi($MYSQL_HOST,$MYSQL_USER,$MYSQL_PASSWORD,$MYSQL_DATABASE);

	if ($DBcon->connect_error){
		require_once $_SERVER['DOCUMENT_ROOT']. '/html/header_offline.php';
		echo '
			<h2 style="color: #0275d8;">Whupps..</h2>
			<br />
			<p style="color:red;">There\'s an MySQL error, check your settings and try to and reload this page.</p>
			<br /><br />
			<h5>If you\'re a client, try to visit this page later again.</h5>
		
		';
		require_once $_SERVER['DOCUMENT_ROOT']. '/html/footer.php';
		die();
	}	
	
?>
	