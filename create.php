<?php

session_start();

require_once 'mysql_conn.php';


if(isset($_POST['btn-comprar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);
	$endereco= mysqli_escape_string($connect, $_POST['endereco']);
   

    $sql= "INSERT INTO gerenciador (nome, sobrenome, telefone, endereco) VALUES('$nome', '$sobrenome', '$telefone', '$endereco')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: inicio.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: inicio.php');
	endif;
endif;