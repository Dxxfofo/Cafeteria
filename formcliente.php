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
			<form action="cadastrocliente.php" method="post" enctype="multipart/form-data">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3">Cadastro do Cliente</h1><hr>
					<div class="row">
						<div class="mb-3 mt-3 col-6">
							<label for="nome" class="form-label"><h5 class="card-title mb-0">Nome</h5></label>
							<input
								type="text"
								class="form-control"
								name="nome"
								id="nome"
								aria-describedby="helpId"
								placeholder="Digite o seu Nome"
								required
							/>
							<small id="helpId" class="form-text text-muted"></small>
						</div>
						<div class="mb-3 mt-3 col-6">
							<label for="email" class="form-label"><h5 class="card-title mb-0">E-mail</h5></label>
							<input
								type="email"
								class="form-control"
								name="email"
								id="email"
								aria-describedby="helpId"
								placeholder="Digite o seu E-mail"
								required
							/>
							<small id="helpId" class="form-text text-muted"></small>
						</div>
						<div class="mb-3 col-4">
							<label for="telefone" class="form-label"><h5 class="card-title mb-0">Telefone</h5></label>
							<input
								type="tel"
								class="form-control"
								name="telefone"
								id="telefone"
								aria-describedby="helpId"
								placeholder="(00) 00000-0000"
								required
							/>
							<small id="helpId" class="form-text text-muted"></small>
						</div>
						
						<div class="mb-3 col-4">
							<label for="cpfcnpj" class="form-label"><h5 class="card-title mb-0">CPF/CNPJ</h5></label>
							<input
								type="text"
								class="form-control"
								name="cpfcnpj"
								id="cpfcnpj"
								aria-describedby="helpId"
								placeholder="000.000.000-00"
								required
							/>
							<small id="helpId" class="form-text text-muted"></small>
						</div>

						<div class="mb-3 col-4">
							<label for="cep" class="form-label"><h5 class="card-title mb-0">CEP</h5></label>
							<input
								type="text"
								class="form-control"
								name="cep"
								id="cep"
								aria-describedby="helpId"
								maxlength="8"
								onkeyup= "viaCEP()"
								placeholder="00000-000"
								required
							/>
							<small id="helpId" class="form-text text-muted"></small>
						</div>
					</div>

					<div class="row">
						<div class="mb-3 col-4">
							<label for="logradouro" class="form-label"><h5 class="card-title mb-0">Logradouro</h5></label>
							<input
								type="text"
								class="form-control"
								name="logradouro"
								id="logradouro"
								aria-describedby="helpId"
								placeholder="Nome da rua"
								required
							/>
							<small id="helpId" class="form-text text-muted"></small>
						</div>

						<div class="mb-3 col-2">
							<label for="numero" class="form-label"><h5 class="card-title mb-0">N°</h5></label>
							<input
								type="number"
								class="form-control"
								name="numero"
								id="numero"
								aria-describedby="helpId"
								placeholder=""
								required
							/>
							<small id="helpId" class="form-text text-muted"></small>
						</div>

						<div class="mb-3 col-3">
							<label for="complemento" class="form-label"><h5 class="card-title mb-0">Complemento</h5></label>
							<input
								type="text"
								class="form-control"
								name="complemento"
								id="complemento"
								aria-describedby="helpId"
								placeholder="Digite o Complemento"
								required
							/>
							<small id="helpId" class="form-text text-muted"></small>
						</div>
						<div class="mb-3 col-3">
							<label for="bairro" class="form-label"><h5 class="card-title mb-0">Bairro</h5></label>
							<input
								type="text"
								class="form-control"
								name="bairro"
								id="bairro"
								aria-describedby="helpId"
								placeholder="Digite o seu Bairro"
								required
							/>
							<small id="helpId" class="form-text text-muted"></small>
						</div>
						<div class="mb-3 col-4">
							<label for="cidade" class="form-label"><h5 class="card-title mb-0">Cidade</h5></label>
							<input
								type="text"
								class="form-control"
								name="cidade"
								id="cidade"
								aria-describedby="helpId"
								placeholder="Digite a sua Cidade"
								required
							/>
							<small id="helpId" class="form-text text-muted"></small>
						</div>
						<div class="mb-3 col-4">
							<label for="uf" class="form-label"><h5 class="card-title mb-0">Estado</h5></label>
							<input
								type="text"
								class="form-control"
								name="uf"
								id="uf"
								aria-describedby="helpId"
								placeholder="Digite o seu Estado"
								required
							/>
							<small id="helpId" class="form-text text-muted"></small>
						</div>
						<div class="mb-3 col-4">
							<label for="imagem" class="form-label"><h5 class="card-title mb-0">Imagem de Perfil</h5></label>
							<input
								type="file"
								class="form-control"
								name="imagem"
								id="imagem"
								placeholder=""
								aria-describedby="fileHelpId"
								
							/>
							<div id="fileHelpId" class="form-text"></div>
						</div>
						
					</div>
				</div>
				<input type="submit" class="btn btn-outline-secondary" type="submit" value="Concluir Cadastro">
			</form>
	</main>
	<div class="main">
				<div class="container">
					<div class="table-responsive">
						<table class="table table-striped table-light">
							<thead>
								<tr>
									<th scope="col">Foto</th>
									<th scope="col">Nome</th>
									<th scope="col">E-mail</th>
									<th scope="col">Telefone</th>
									<th scope="col">Estado</th>
									<th scope="col">Ações</th>
								</tr>
							</thead>
							<tbody>
									<?php
										include 'conexao.php';
										$sql = "SELECT * FROM clientes";
										$busca =mysqli_query($conexao,$sql);
										while ($dados = mysqli_fetch_array($busca)) {
											$imagem = $dados['imagem'];
											$nome = $dados['nome'];
											$email = $dados['email'];
											$telefone = $dados['telefone'];
											$uf = $dados['uf'];
											
										?>
										<tr>
											<td><img src="imagens/<?php echo $imagem ?>" width="100px" height="100%" class="rounded-circle"></td>
											<td><?php echo $nome ?></td>
											<td><?php echo $email ?></td>
											<td><?php echo $telefone ?></td>
											<td><?php echo $uf ?></td>
											
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

<script src="js/app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	
</body>

</html>

<script>
    function viaCEP() {

        var numCep = $("#cep").val();

        var url = "https://viacep.com.br/ws/" + numCep + "/json";

        $.ajax({
            url: url,
            type: "get",
            dataType: "json",

            success: function (dados) {
                console.log(dados);
                $("#uf").val(dados.uf);
                $("#cidade").val(dados.localidade);
                $("#logradouro").val(dados.logradouro);
                $("#bairro").val(dados.bairro);
            }
        })


    }
</script>
<!-- Importação do Jquery Mask -->
<!-- include da importação da mascara dos inputs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
<script type="text/javascript">
    $("#telefone, #celular").mask("(00) 00000-0000"); //000 000 0000 eua
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    $('.cep').mask('00000-000');
    $('.phone').mask('0000-0000');
    $('.phone_with_ddd').mask('(00) 0000-0000');
    $('.phone_us').mask('(000) 000-0000');
    $('.mixed').mask('AAA 000-S0S');
    $('.cpf').mask('000.000.000-00', { reverse: true });
    $('.cnpj').mask('00.000.000/0000-00', { reverse: true });
    $('.money').mask('000.000.000.000.000,00', { reverse: true });
    $('.money2').mask("#.##0,00", { reverse: true });
    $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
        }
    });
    $('.ip_address').mask('099.099.099.099');
    $('.percent').mask('##0,00%', { reverse: true });
    $('.clear-if-not-match').mask("00/00/0000", { clearIfNotMatch: true });
    $('.placeholder').mask("00/00/0000", { placeholder: "__/__/____" });
    $('.fallback').mask("00r00r0000", {
        translation: {
            'r': {
                pattern: /[\/]/,
                fallback: '/'
            },
            placeholder: "__/__/____"
        }
    });
    $('.selectonfocus').mask("00/00/0000", { selectOnFocus: true });
</script>


<script type="text/javascript">
    $("#cpfcnpj").keydown(function () {
        try {
            $("#cpfcnpj").unmask();
        } catch (e) { }

        var tamanho = $("#cpfcnpj").val().length;

        if (tamanho < 11) {
            $("#cpfcnpj").mask("999.999.999-99");
        } else {
            $("#cpfcnpj").mask("99.999.999/9999-99");
        }

        // ajustando foco
        var elem = this;
        setTimeout(function () {
            // mudo a posição do seletor
            elem.selectionStart = elem.selectionEnd = 10000;
        }, 0);
        // reaplico o valor para mudar o foco
        var currentValue = $(this).val();
        $(this).val('');
        $(this).val(currentValue);
    });
</script>