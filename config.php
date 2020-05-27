	<?php
		define('HOST','localhost');
		define('USER','root');
		define('PASS','Bancoprojeto123');
		define('BASE','sops');
		
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		//$conexao = mysqli_connect($servidor,$usuario,$senha, $banco);

		$conn = new mysqli(HOST,USER,PASS,BASE);
		$conn = mysqli_connect("localhost", "root", "Bancoprojeto123", "sops") or die
		("Sem conexão com o servidor");
		$select = mysqli_select_db("Bancoprojeto123", "sops") or die ("Sem acesso ao DB, Entre em 
		contato com o Administrador, lucasbraga8590@gmail.com");

		
		if( mysqli_connect_error() ){
			print_r("Conexão falhou: ",mysqli_connect_error());
			exit();
		}
		$result = mysqli_query("SELECT * FROM 'funcionario' WHERE 'email' = '$email' AND 'senha'= '$senha'");
			if(mysqli_num_rows ($result) > 0 )
			{
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			header('location:index.php');
			}
			else{
			unset ($_SESSION['login']);
			unset ($_SESSION['senha']);
			header('location:index.html');
			
			}
	?>