<?php

	// Faz o loading dinamico de todas as classes que o sistema precisa.
	// Para utilizar eh so colocar o include abaixo em cada arquivo php
	// include $_SERVER["DOCUMENT_ROOT"] . '/classes.php';

	//require_once realpath($_SERVER["DOCUMENT_ROOT"]) . '/app/Settings.class.php';
	include realpath($_SERVER["DOCUMENT_ROOT"]) . '/includes/autoloader/Autoloader.php';
	
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	
	require_once("$root/helper/Helper.php");
	require_once("$root/Env.php");
	require_once("$root/helper/Log.php");
	require_once("$root/helper/Sendmail.php");

	require_once("$root/includes/simple_html_dom.php");
	
	// //se o ambiente é local sempre mostra erros na tela
	// 	if (Settings::get_env() == Settings::LOCAL) {
	// 		ini_set('display_errors', TRUE);
	// 		ini_set('display_startup_errors', TRUE);	
	// 	}	
?>