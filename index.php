<?php
	require_once "config.php";	
	$config = new ConfigClass();
	// Standart function
	require_once "engine/func.php";
	// Header
	require_once $config->template."/header.php";	
	// Content
	require_once $config->template."/form.php";
	// Footer	
	require_once $config->template."/footer.php";
?>
