<?php

session_start();
require_once 'mysql_conn.php';

if(isset($_POST['btn-deletar'])):
	
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "DELETE FROM gerenciador WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: inicio.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: inicio.php');
	endif;
endif;