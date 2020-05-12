<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO cliente (nome,cpf,data_nasc) VALUES ('".$_REQUEST["nome"]."','".$_REQUEST["cpf"]."','".$_REQUEST["data_nasc"]."')";
			//die($sql);
			$res = $conn->query($sql);	
	
			if($res==true ){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE cliente SET 
						nome='".$_REQUEST["nome"]."',
						cpf='".$_REQUEST["cpf"]."',
						data_nasc='".$_REQUEST["data_nasc"]."',
					WHERE id_cliente=".$_REQUEST["id_cliente"];
			
			$res = $conn->query($sql);
			
			if($res==true){
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