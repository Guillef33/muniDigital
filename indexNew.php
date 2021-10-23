<?php 
	require_once("config.php");

	// require_once("conexion/conexion.php");

	//CONTROLLERS
	require_once("controllers/enlaceController.php");
//	require_once("controllers/adminController.php");
//	require_once("controllers/clientController.php");

	//MODELS
//	require_once("models/adminModel.php");
//	require_once("models/clientModel.php");

	//FUNCTION
//	require_once("php/function.php");

	$template = new enlaceController;
	$template->template();
