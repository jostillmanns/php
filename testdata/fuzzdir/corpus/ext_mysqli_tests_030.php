<?php
	require_once("connect.inc");

	/*** test mysqli_connect 127.0.0.1 ***/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
	$errno = mysqli_errno($link);
	var_dump($errno);

	mysqli_select_db($link, $db);

	mysqli_query($link, "SELECT * FROM non_exisiting_table");
	$errno = mysqli_errno($link);

	var_dump($errno);

	mysqli_close($link);
	print "done!";
?>
