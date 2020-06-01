<h1>Editar Veículo</h1>
<?php
	switch(@$_REQUEST['page']){
		case 'salvar-veiculo':
			include('salvar-veiculo.php');
		break;
	}

include('config.php');
	$sql = "SELECT * FROM veiculo 
			WHERE id_veiculo=".$_GET["id_veiculo"];
			
			
	$res = $conn->query($sql) or die($conn->error);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-veiculo" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_veiculo" value="<?php print $row->id_veiculo; ?>">
	<div class="form-group">

		<?php
			$sql1 = "SELECT * FROM veiculo";
			
			$res1 = $conn->query($sql1) or die($conn->error);
			
			$qtd1 = $res1->num_rows;		
		?>
	</div>
	<div class="form-group">
        <label>Marca do Veívculo</label>
        <input type="text" name="marca" class="form-control">
    </div>
    <div class="form-group">
        <label>Modelo do Veículo</label>
        <input type="text" name="modelo" class="form-control">
    </div>
    <div class="form-group">
        <label>Ano de Fabricacão</label>
        <input type="date" name= "ano_fabricacao" class="form-control">
    </div>
    <div class="form-group">
        <label>Placa do Veículo</label>
        <input type="number" name="placa" class="form-control">
    </div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>




