	<?php
	
		$conn = mysqli_connect("localhost", "eu", "1234", "sopsv2") or die
		("Sem conexão com o servidor");

		if( mysqli_connect_error() ){
			print_r("Conexão falhou: ",mysqli_connect_error());
			exit();
		}

?>