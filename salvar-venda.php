<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO venda (nome_servico,valor_servico) VALUES ('".$_REQUEST["nome_servico"]."','".$_REQUEST["valor_servico"]."')";
			//die($sql);
			$res = $conn->query($sql);	
	
			if($res==true ){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE venda SET 
						nome_servico='".$_REQUEST["nome_servico"]."',
						valor_servico='".$_REQUEST["valor_servico"]"',
					WHERE id_venda='".$_REQUEST["id_venda"]"';
			
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