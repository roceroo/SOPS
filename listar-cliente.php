<h1>Listar Cliente</h1>
<?php
	$sql = "SELECT * FROM cliente AS u
			INNER JOIN veiculo AS b
			ON u.id_cliente = b.id_veiculo";
	
	$conn = mysqli_connect('localhost','root', 'root', 'sops') or die("Erro de conexão");

	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	print "<p>Encontrou <b>".$qtd."</b> resultado(s)</p>";
	
	if($qtd > 0){
		print "<table class='table table-striped table-hover'>";
		print "<tr>";
		print "<th>Nome</th>";
		print "<th>CPF</th>";
		print "<th>Data de Nasciemnto</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->cpf."</td>";
			print "<td>".$row->data_nasc."</td>";
			print "<td>
					 <button class='btn btn-success' onclick=\"location.href='?page=editar-cliente&id_cliente=".$row->id_cliente."';\">Editar</button>
					 
					 <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-cliente&acao=excluir&id_cliente=".$row->id_cliente."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
	}
?>









