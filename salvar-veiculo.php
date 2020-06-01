<?php
include('config.php');
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO veiculo (marca, modelo, ano_fabricacao, placa) VALUES ('".$_REQUEST["marca"]."','".$_REQUEST["modelo"]."','".$_REQUEST["ano_fabricacao"]."','".$_REQUEST["placa"]."')";

			$res = $conn -> query($sql);	
	
			if($res==true){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
				print "<a href='listar-veiculo.php'>Ir para listagem de Veículos</a>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE veiculo SET
			 				marca = '".$_REQUEST["marca"]."',
							modelo = '".$_REQUEST["modelo"]."', 
							ano_fabricacao = '".$_REQUEST["ano_fabricacao"]."', 
							placa = '".$_REQUEST["placa"]."', 
							WHERE id_veiculo = '".$_REQUEST["id_veiculo"]."'";
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM veiculo WHERE id_veiculo=".$_REQUEST["id_veiculo"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}

?>