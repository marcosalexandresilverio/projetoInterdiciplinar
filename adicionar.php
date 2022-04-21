<?php
// Header
include_once 'header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo cadastro</h3>
		<form action="create.php" method="POST">
			<div class="input-field col s12">
				<i class="material-icons prefix">account_circle</i>
				<input type="text" name="nome" id="nome" required>
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<i class="material-icons prefix">people</i>
				<input type="text" name="sobrenome" id="sobrenome" required>
				<label for="sobrenome">Sobrenome</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">phone</i>
				<input type="text" name="telefone" id="telefone" required>
				<label for="telefone">Telefone</label>
			</div>
			
			<div class="input-field col s12">
				<i class="material-icons prefix">work</i>
				<input type="text" name="endereco" id="endereco" required>
				<label for="cargo">Endereço</label>
			</div>

			
			<button type="submit" name="btn-cadastrar" class="btn"><i class="material-icons right">input</i> 		 Cadastrar </button>
			
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'footer.php';
?>
