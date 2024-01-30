<!DOCTYPE html>
<html lang="pt-br">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<head>
	<?php
		include 'header.php';
	?>
</head>

<body>
	<div class="wrapper">
		<?php
		include 'menu.php';
	?>
		
	<div class="main">

    <?php
		include 'topo.php';
	?>
<main class="content">
		<form action="cadastroproduto.php" method="post">
			<div class="container-fluid p-0">
				<h1 class="h3 mb-3">Cardápio</h1><hr> 
				<div class="row">
					<div class="mb-4 col-6">
						<label for="produto" class="form-label"><h5 class="card-title mb-0">Produto</h5></label>
						<input type="text" class="form-control" id="produto" placeholder="Digite o nome do produto">
					</div>
					
					<div class="mb-3 col-6">
						<label for="descricao" class="form-label"><h5 class="card-title mb-0">Descrição</h5></label>
						<textarea class="form-control" id="descricao" rows="1"></textarea>
					</div>

					<div class="mb-5 col-6">
						<label for="descricao" class="form-label"><h5 class="card-title mb-0">Categoria</h5></label>
						<select class="form-select form-select-lg"
						  id="categoria"
						  name="categoria" 
						>
						<option selected disabled>Selecione um produto:</option>
						<option value="bebidaquente">Bebida Quente</option>
						<option value="bebidagelada">Bebida Gelada</option>
						<option value="bolosobremesa">Bolo e Sobremesa</option>
						<option value="salgadosanduiche">Salgado e Sanduíche</option>
						</select>
					</div>

					<div class= "mb-4 col 6">
						<label for="estoque" class="form-label"><h5 class="card-title mb-0">Estoque</h5></label>
						<input type="number" class="form-control" name="estoque" id="estoque" min="0" max="10" step="1">
					</div>
					<div class= "mb-4 col 6">
						<label for="preco" class="form-label"><h5 class="card-title mb-0">Preço</h5></label>
						<input type="number" class="form-control" name="preco" id="preco" min="0"  step="1">
					</div>
				</div>
			</div>
			<input type="submit" class="btn btn-outline-secondary" type="submit" value="Concluir Pedido">
		</form>
	</main>

	<div class="main">
				<div class="container">
					<div class="table-responsive">
						<table class="table table-striped table-light">
							<thead>
								<tr>
									<th scope="col">Produto</th>
									<th scope="col">Descriçao</th>
									<th scope="col">Categoria</th>
									<th scope="col">Estoque</th>
									<th scope="col">Preço</th>
									<th scope="col">Ações</th>
								</tr>
							</thead>
							<tbody>
									<?php
										include 'conexao.php';
										$sql = "SELECT * FROM produtos";
										$busca =mysqli_query($conexao,$sql);
										while ($dados = mysqli_fetch_array($busca)) {
											$produto = $dados['produto'];
											$descricao = $dados['descricao'];
											$categoria = $dados['categoria'];
											$estoque = $dados['estoque'];
											$preco = $dados['preco'];
										?>
										<tr>
											<td><?php echo $produto ?></td>
											<td><?php echo $descricao ?></td>
											<td><?php echo $categoria ?></td>
											<td><?php echo $estoque ?></td>
											<td><?php echo $preco ?></td>
										</tr>
										<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

	<footer class="footer">
    <?php
		include 'footer.php';
	?>
	</footer>
	</div>
</div>

<style>
	form{
		justify-content: center;
		text-align: center;
	}
	#categoria{
		border-radius: 20px;
	}
	#produto{
		border-radius: 10px;
	}
	#descricao{
		border-radius: 10px;
	}

</style>

<?php

?>

<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>