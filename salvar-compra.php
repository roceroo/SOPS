<?php
include('config.php');
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO compra (nome_produto_compra, data_compra, custo_compra, fornecedor) VALUES ('".$_REQUEST["nome_produto_compra"]."','".$_REQUEST["data_compra"]."','".$_REQUEST["custo_compra"]."','".$_REQUEST["fornecedor"]."')";

			$res = $conn -> query($sql);	
	
			if($res==true){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
				print "<a href='listar-compra.php'>Ir para listagem de Compras</a>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE compra SET
			 				nome_produto_compra = '".$_REQUEST["nome_produo_compra"]."',
							data_compra = '".$_REQUEST["data_compra"]."', 
							custo_compra = '".$_REQUEST["custo_compra"]."', 
							fornecedor = '".$_REQUEST["fornecedor"]."' 
							WHERE id_compra = '".$_REQUEST["id_compra"]."'";
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
				print $sql;
			}
		break;
		case "excluir":
			$sql = "DELETE FROM compra WHERE id_compra=".$_REQUEST["id_compra"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}

?>