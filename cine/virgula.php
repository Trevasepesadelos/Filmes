<?php
	$servidor = "localhost";
	$banco = "cine";
	$usuario = "root";
	$senha = "";

	$conexao = new mysqli($servidor, $usuario, $senha, $banco);

	if($conexao->conect_error){
		die("Falha na conexão".$conexao->connect_error);
	}

	echo "Conectou com sucesso";

?>