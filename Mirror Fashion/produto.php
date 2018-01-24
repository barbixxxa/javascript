<?php
$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
$produto = mysqli_fetch_array($dados);
?>
<?php
$cabecalho_title = $produto['nome'];
$cabecalho_css = '<link rel="stylesheet" href="css/produto.css">'; 
include("cabecalho.php");
?>
<body>
	<div class="produto-back">
		<div class = "container">
			<div class="produto">
				<h1><?= $produto['nome'] ?></h1>
				<p>por apenas <?= $produto['preco'] ?></p>
				<form action="checkout.php" method="post">
					<input type="hidden" name="id" value="<?= $produto['id'] ?>">
					<fieldset class="cores">
						<legend>Escolha a cor:</legend>

						<input type="radio" name="cor" value="verde" id="verde" checked>
						<label for="verde">
							<img src="img/produtos/foto<?= $produto['id'] ?>-verde.png">
						</label>

						<input type="radio" name="cor" value="rosa" id="rosa">
						<label for="rosa">
							<img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png">
						</label>

						<input type="radio" name="cor" value="azul" id="azul">
						<label for="azul">
							<img src="img/produtos/foto<?= $produto['id'] ?>-azul.png">
						</label>

					</fieldset>
					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>
						<output for="tamanho" name="valortamanho">42</output>
						<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
					</fieldset>
					<input type="hidden" name="nome" value="<?= $produto['nome'] ?>">
					<input type="hidden" name="preco" value="<?= $produto['preco'] ?>">
					<input type="submit" class="comprar" value="Comprar">
				</form>
			</div>
			<div class="detalhes">
				<h2>Detalhes do produto</h2>

				<p><?= $produto['descricao'] ?></p>

				<table>
					<thead>
						<tr>
							<th>Característica</th>
							<th>Detalhe</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algodão e poliester</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Azul, Rosa e Verde</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>


	<script type="text/javascript" src="js/produto.js"></script>
	<?php include("rodape.php"); ?>
</body>
</html>