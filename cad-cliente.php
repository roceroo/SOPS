<h1>Cadastrar Cliente</h1>
<form action="?page=salvar-cliente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome do Cliente</label>
		<input type="text" name="nome" class="form-control">
	</div>
	<div class="form-group">
		<label>Email do Cliente</label>
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
		<button type="submit" class="btn btn-success">Cadastrar</button>
	</div>
</form>