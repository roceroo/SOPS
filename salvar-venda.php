<?php
	include('config.php');
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO venda (nome_servico,valor) VALUES ('".$_REQUEST["nome_servico"]."','".$_REQUEST["valor"]."')";
			//die($sql);
			$res = $conn->query($sql);	
	
			if($res==true ){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
				print "<a href='listar-venda.php'>Ir para listagem de vendas</a>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
				print $sql;
			}
		break;
		case "editar":
					$sql = "UPDATE venda SET
					nome_servico = '".$_REQUEST["nome_servico"]."',
				 valor = '".$_REQUEST["valor"]."'
				 WHERE id_venda = '".$_REQUEST["id_venda"]."'";
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM venda WHERE id_venda=".$_REQUEST["id_venda"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}
?>