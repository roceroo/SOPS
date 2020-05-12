<h1>Editar Cliente</h1>
<?php
	$sql = "SELECT * FROM cliente 
			WHERE id_cliente=".$_REQUEST["id_cliente"];
			
			
	$res = $conn->query($sql) or die($conn->error);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-cliente" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_cliente" value="<?php print $row->id_cliente; ?>">
	<div class="form-group">

		<?php
			$sql1 = "SELECT * FROM cliente";
			
			$res1 = $conn->query($sql1) or die($conn->error);
			
			$qtd1 = $res1->num_rows;
			
			
		?>
	</div>
	<div class="form-group">
		<label>Nome do Cliente</label>
		<input type="text" name="nome" class="form-control">
	</div>
	<div class="form-group">
		<label>CPF do Cliente</label>
		<input type="number" name="cpf" class="form-control">
	</div>
	<div class="form-group">
		<label>Data de Nascimento do Cliente</label>
		<input type="date" name="data_nasc" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>




