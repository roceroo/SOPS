	<?php
		// define('HOST','localhost');
		// define('USER','eu');
		// define('PASS','1234');
		// define('BASE','sopsv2');

		// $conn = new mysqli(HOST,USER,PASS,BASE);
		$conn = mysqli_connect("localhost", "eu", "1234", "sopsv2") or die
		("Sem conexão com o servidor");

		if( mysqli_connect_error() ){
			print_r("Conexão falhou: ",mysqli_connect_error());
			exit();
		}
	?>