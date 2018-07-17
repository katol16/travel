<?php

	$post_connection = mysqli_connect('localhost', 'root', '', 'Hikers');

	if (!$post_connection) {
		die("connection failed: ".mysqli_connect_error());
	} 

?>