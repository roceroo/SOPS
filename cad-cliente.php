<!doctype html>
<head>
    <style>
      #app{
        color: #e6e6e6;
      }
      .content{
        padding: 40px;
        width: 600px;
        margin: 0 auto;
      }
    </style>

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
    <div id="app">
      <div class="bg-config"></div>
      <div style="text-align: center;" class="menu">
        <div class="container">
          <div id="logo" class="grid-6">
            <img src="img/sops.png" alt="SOPS">
          </div>
          <div class="dropdown grid-6">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              O que deseja fazer?
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a v-on:click="page = 0" class="dropdown-item" href="cad-funcionario.php">Cadastro de Funcionário</a>
              <a v-on:click="page = 0" class="dropdown-item" href="listar-funcionario.php">Listar Funcionário</a>
              <a class="dropdown-item" href="cad-compra.php">Cadastro de Compra</a>
              <a v-on:click="page = 0" class="dropdown-item" href="listar-compra.php">Listar Compra</a>
              <a class="dropdown-item" href="cad-venda.php">Cadastro de Venda</a>
              <a v-on:click="page = 0" class="dropdown-item" href="listar-venda.php">Listar Venda</a>
              <a class="dropdown-item" href="cad-cliente.php">Cadastro de Cliente</a>
              <a v-on:click="page = 0" class="dropdown-item" href="listar-cliente.php">Listar Cliente</a>
              <a class="dropdown-item" href="cad-veiculo.php">Cadastro de Veículo</a>
              <a v-on:click="page = 0" class="dropdown-item" href="listar-veiculo.php">Listar Veículo</a>
              <a v-on:click="page = 0" class="dropdown-item" href="index2.php">Voltar para a página inicial</a> 
              <a v-on:click="page = 0" class="dropdown-item"  href="index2.html">Voltar para a página inicial</a> 
            </div>
          </div>
        </div>
    </div>
	<h1 style='color: #e6e6e6; padding: 16px'>Cadastrar Cliente</h1>
  <div style='color: #e6e6e6; width: 600px; margin: 19vh auto' >
    <form action="salvar-cliente.php" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
      <div class="form-group">
        <label>Nome do Cliente</label>
        <input type="text" name="nome" class="form-control">
      </div>
      <div class="form-group">
        <label>Email do Cliente</label>
        <input type="text" name="email" class="form-control">
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
  </div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>