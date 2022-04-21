<?php

include_once 'mysql_conn.php';
include_once 'header.php';

if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM gerenciador WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar cadastro </h3>
		<form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<i class="material-icons prefix">account_circle</i>
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<i class="material-icons prefix">people</i>
				<input type="text" name="sobrenome" value="<?php echo $dados['sobrenome'];?>" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>

			<div class="input-field col s12">
				<i class="material-icons prefix">phone</i>
				<input type="text" value="<?php echo $dados['telefone'];?>" name="telefone" id="telefone">
				<label for="telefone">Telefone</label>
			</div>

			<div class="input-field col s12">
				<i class="material-icons prefix">home</i>
				<input type="text" value="<?php echo $dados['endereco'];?>" name="endereco" id="endereco">
				<label for="endereco">Endereço</label>
			</div>
			
			<button type="submit" name="btn-editar" class="btn blue"><i class="material-icons right">update</i> 		Atualizar</button>
			
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'footer.php';
?>
