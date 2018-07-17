<?php 
	session_start();

	require_once "Facebook/autoload.php"

	$FB = new \Facebook\Facebook([
		'app_id' => ' TUTAJ ZE STRONY FB MASZ NA TUTORIALU',
		'app_secret' => 'TUTAJ ZE STRONY FB MASZ NA TUTORIALU ',
		'defaul_graph_version' => 'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();

?>