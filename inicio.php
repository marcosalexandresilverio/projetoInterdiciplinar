<?php
include_once 'mysql_conn.php';
include_once 'header.php';
include_once 'mensagem.php';
?>
<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Cadastros </h3>
		<table class="highlight">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Sobrenome:</th>
					<th>Telefone:</th>
					<th>Endereço:</th>
                    
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM gerenciador";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['sobrenome']; ?></td>
					<td><?php echo $dados['telefone']; ?></td>
					<td><?php echo $dados['endereco']; ?></td>
                    
					<td><a href="editar.php?id=<?php echo $dados['id']; ?> "class="btn orange tooltipped" data-position="top" data-tooltip="Editar"><i class="material-icons">edit</i></a></td>
					
					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn tooltipped red modal-trigger" data-position="top" data-tooltip="Deletar"><i class="material-icons">delete</i></a></td>

						<div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Atenção!</h4>
					      <p>Tem certeza que deseja excluir esse cadastro?</p>
					    </div>
					    <div class="modal-footer">					     

					      <form action="delete.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" name="btn-deletar" class="btn red">Sim</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		
	</div>
</div>

<?php

include_once 'footer.php';
?>

