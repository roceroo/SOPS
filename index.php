
<html lang="pt-br">
  <head>
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
              <a class="dropdown-item" href="?page=cad-compra">Cadastro de Compra</a>
              <a class="dropdown-item" href="?page=cad-venda">Cadastro de Venda</a>
              <a class="dropdown-item" href="?page=cad-cliente">Cadastro de Cliente</a>
              <a class="dropdown-item" href="cad-veiculo">Cadastro de Veículo</a>
              <a v-on:click="page = 0" class="dropdown-item" href="index.php">Voltar para a página inicial</a> 
            </div>
          </div>
        </div>
      </div>
      <!-- PÁGINA PRINCIPAL -->
      <div v-if="page === 0">
        <main class="intro">
          <h1>Venha para a melhor <br> oficina do DF</h1>
          <p>Oficina referência em conserto gerais em carros de luxo em Brasília</p>
          <div class="container pages">
            <div class="grid-4">
              <button v-on:click="page = 1" class="btn btn-outline-primary btn-lg ebtn">Sobre Nós</button>
            </div>
            <div class="grid-4">
              <button v-on:click="page = 2" class="btn btn-outline-primary btn-lg ebtn">Serviços</button>
            </div>
            <div class="grid-4">
              <button v-on:click="page = 3" class="btn btn-outline-primary btn-lg ebtn">Modelos</button>
            </div>
          </div>
        </main>
      </div>
      <!-- PÁGINA DE OBJETIVOS -->
      <div v-if="page === 1">
        <main class="intro">
          <h1>Nosso objetivo</h1>
          <div class="container">
            <div class="grid-12">
              <div style="align-items: center; display: flex; justify-content: center;">
                <div style=" max-width: 500px;">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
            <button style="margin-top: 85px" class="btn btn-light" v-on:click="page = 0">Voltar</button>
          </div>
        </main>
      </div>
      <!-- PÁGINA DE SERVIÇOS -->
      <div v-if="page === 2">
        <main class="intro">
          <div class="container">
            <div class="grid-6">
              <img src="img/oleo.jpg" alt="">
            </div>
            <div class="grid-6 flex">
              <h3>Troca de óleo</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div class="container servicos-item">
            <div class="grid-6">
              <img src="img/oleo.jpg" alt="">
            </div>
            <div class="grid-6 flex">
              <h3>Troca de óleo</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <button style="margin-top: 45px; margin-bottom: 45px;" class="btn btn-light" v-on:click="page = 0">Voltar</button>
        </main>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
      new Vue({
        el: "#app",
        data:{
          title: "SOPS",
          page: 0
        },
      })
    </script>
  </body>
</html>