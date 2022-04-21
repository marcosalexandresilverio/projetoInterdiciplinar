<?php

session_start();
require_once 'mysql_conn.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$endereco = mysqli_escape_string($connect, $_POST['endereco']);
	

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE gerenciador SET nome = '$nome', sobrenome = '$sobrenome', telefone = '$telefone', endereco = '$endereco'  WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: inicio.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: inicio.php');
	endif;
endif;