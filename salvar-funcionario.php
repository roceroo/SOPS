<?php
include('config.php');
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO funcionario (nome, email, endereco, cpf, data_nasc, salario, senha) VALUES ('".$_REQUEST["nome"]."','".$_REQUEST["email"]."','".$_REQUEST["endereco"]."','".$_REQUEST["cpf"]."','".$_REQUEST["data_nasc"]."','".$_REQUEST["salario"]."','".$_REQUEST["senha"]."')";

			$res = $conn -> query($sql);	
	
			if($res==true){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
				print "<a href='listar-funcionario.php'>Ir para listagem de Funcionários</a>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE funcionario SET
			 				nome = '".$_REQUEST["nome"]."',
							email = '".$_REQUEST["email"]."', 
							endereco = '".$_REQUEST["endereco"]."', 
							cpf = '".$_REQUEST["cpf"]."', 
							data_nasc = '".$_REQUEST["data_nasc"]."', 
							salario = '".$_REQUEST["salario"]."', 
							senha = '".$_REQUEST["senha"]."'
							WHERE id_funcionario = '".$_REQUEST["id_funcionario"]."'";
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
				print $sql;
			}
		break;
		case "excluir":
			$sql = "DELETE FROM funcionario WHERE id_funcionario=".$_REQUEST["id_funcionario"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}

?>