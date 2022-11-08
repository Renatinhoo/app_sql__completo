<?php
	require_once("controller/ControllerCadastro.php");

	$controller = new cadastroController();
	$result = $controller->excluir($_GET['id']);

?>