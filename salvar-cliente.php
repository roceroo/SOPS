<?php
	include('config.php');
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO cliente (nome,email,cpf,data_nasc, ) VALUES ('".$_REQUEST["nome"]."','".$_REQUEST["email"]."', '".$_REQUEST["cpf"]."','".$_REQUEST["data_nasc"]."')";
			//die($sql);
			$res = $conn->query($sql);	
	
			if($res==true ){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
				print "<a href='listar-cliente.php'>Ir para listagem de Clientes</a>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
				print $sql;
			}
		break;
		case "editar":
			$sql = "UPDATE venda SET
			nome = '".$_REQUEST["nome"]."',
		 	email = '".$_REQUEST["email"]."',
			 cpf = '".$_REQUEST["cpf"]."',
		 	data_nasc = '".$_REQUEST["data_nasc"]."'
		 	WHERE id_cliente = '".$_REQUEST["id_cliente"]."'";
			
			$res = $conn->query($sql);
			
			if( $res === true ){
				print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM cliente WHERE id_cliente=".$_REQUEST["id_cliente"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}
?>