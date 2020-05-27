<h1>Editar Compra</h1>
<?php
	$sql = "SELECT * FROM compra 
			WHERE id_compra=".$_REQUEST["id_compra"];
			
			
	$res = $conn->query($sql) or die($conn->error);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-compra" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_compra" value="<?php print $row->id_compra; ?>">
	<div class="form-group">

		<?php
			$sql1 = "SELECT * FROM compra";
			
			$res1 = $conn->query($sql1) or die($conn->error);
			
			$qtd1 = $res1->num_rows;		
		?>
	</div>
	<div class="form-group">
		<label>Nome do Produto</label>
		<input type="text" name="nome_produto_compra" class="form-control">
    </div>
    <div class="form-group">
		<label>Data da compra</label>
		<input type="date" name="data_compra" class="form-control">
    </div>
	<div class="form-group">
		<label>Custo da Compra</label>
		<input type="number" name="custo_compra" class="form-control">
	</div>
    <div class="form-group">
		<label>Fornecedor</label>
		<input type="text" name="fornecedor" class="form-control">
	</div>
    <div class="form-group">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>

