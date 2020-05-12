<h1>Editar Funcionario</h1>
<?php
	$sql = "SELECT * FROM funcionario 
			WHERE id_funcionario=".$_REQUEST["id_funcionario"];
			
			
	$res = $conn->query($sql) or die($conn->error);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-funcionario" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_funcionario" value="<?php print $row->id_funcionario; ?>">
	<div class="form-group">

		<?php
			$sql1 = "SELECT * FROM funcionario";
			
			$res1 = $conn->query($sql1) or die($conn->error);
			
			$qtd1 = $res1->num_rows;		
		?>
	</div>
	<div class="form-group">
		<label>Nome do Funcionário</label>
		<input type="text" name="nome" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Endereço do Funcionário</label>
		<input type="text" name="endereco" class="form-control">
	</div>
	<div class="form-group">
		<label>CPF do Funcionário</label>
		<input type="number" name="cpf" class="form-control">
	</div>
	<div class="form-group">
		<label>Data de Nascimento do Funcionário</label>
		<input type="date" name="data_nasc" class="form-control">
	</div>
	<div class="form-group">
		<label>Salário</label>
		<input type="number" name="salario" class="form-control">
	</div>
</form>




