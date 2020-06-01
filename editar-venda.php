<h1>Editar Venda</h1>
<?php
	switch(@$_REQUEST['page']){
		case 'salvar-venda':
			include('salvar-venda.php');
		break;
	}

include('config.php');
	$sql = "SELECT * FROM venda 
			WHERE id_venda=".$_GET["id_venda"];
			
			
	$res = $conn->query($sql) or die($conn->error);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-venda" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_venda" value="<?php print $row->id_venda; ?>">
	<div class="form-group">

		<?php
			$sql1 = "SELECT * FROM venda";
			
			$res1 = $conn->query($sql1) or die($conn->error);
			
			$qtd1 = $res1->num_rows;		
		?>
	</div>
	<div class="form-group">
		<label>Nome do Servico</label>
		<input type="text" name="nome_servico" value='<?php print $row->nome_servico?>' class="form-control">
    </div>
    <div class="form-group">
		<label>Valor do Servico</label>
		<input type="number" name="valor" value='<?php print $row->valor?>' class="form-control">
    </div>
    <div class="form-group">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>

