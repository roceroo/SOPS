<!doctype html>
<head>
    <meta charset="UTF-8">
    
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SOPS</title>
</head>

<body>
	<h1>Listar Compra</h1>
	<?php
		$sql = "SELECT * FROM compra";
		
		$res = $conn->query($sql) or die($conn->error);
		
		$qtd = $res->num_rows;
		
		print "<p>Encontrou <b>".$qtd."</b> resultado(s)</p>";
		
		if($qtd > 0){
			print "<table class='table table-striped table-hover'>";
			print "<tr>";
			print "<th>Nome do Produto</th>";
			print "<th>Data da Compra</th>";
			print "<th>Custo da Compra</th>";
			print "<th>Fornecedor</th>";
			print "<th>Ações</th>";
			print "</tr>";
			while($row = $res->fetch_object()){
				print "<tr>";
				print "<td>".$row->nome_produto_compra."</td>";
				print "<td>".$row->data_compra."</td>";
				print "<td>".$row->custo_compra."</td>";
				print "<td>".$row->fornecedor."</td>";
				print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-compra&id_compra=".$row->id_compra."';\">Editar</button>
						
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-compra&acao=excluir&id_compra=".$row->id_compra."';}else{false;}\">Excluir</button>
					</td>";
				print "</tr>";
			}
			print "</table>";
		}else{
			print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
		}
	?>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>







