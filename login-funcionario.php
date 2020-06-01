<!doctype html>
<head>

<?php
  include('config.php');
  if(isset($_REQUEST['attempt'])){
    $conn;

    $query = mysqli_query($conn, "SELECT email FROM funcionario WHERE email = $email AND senha = $senha");

    $email =  $_POST['email'];
    $senha = $_POST['senha'];

    $arrDados = mysqli_fetch_assoc($query);
    $nlinhas = count($arrDados);

    if($nlinhas == 1){
      print "<script>alert('Usuário ou senha incorretos')</script>";  
    } else {
      session_start();
      $_SESSION['user'] = 'Logado';
      header('location: index.php');
    }
    
  }  

?>
    <meta charset="UTF-8">
   <style>
    *{
      color: #e6e6e6
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
              <a v-on:click="page = 0" class="dropdown-item" href ="index.html">Voltar para a página inicial</a> 
            </div>
          </div>
        </div>
      </div>
      <div class="holder">
        <form method="POST" action="login-funcionario.php?attempt">
          <div class="form-group">
            <label >Email </label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Digite seu Email">
            <small id="emailHelp" class="form-text text-muted">Seu Email não será compartilhado com ninguem.</small>
          </div>
          <div class="form-group">
            <label >Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
          </div>
          <button type="submit" class="btn btn-primary" name="entrar" id="entrar">Entrar</button>
        </form>
      </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>


</html>