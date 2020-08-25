<?php
	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$nivel = $_POST["nivel"];
	$senha = md5($_POST["senha"]);

	if ($nome == "") {
		# code...
		echo "Nome é obrigatório";
		exit;
	}

	if ($login == "") {
		# code...
		echo "login é obrigatório";
		exit;
	}

	if ($nivel == "") {
		# code...
		echo "Nivel é obrigatório";
		exit;
	}

	if ($senha == "") {
		# code...
		echo "Senha é obrigatório";
		exit;
	}


	$conexao = new PDO('mysql:host=localhost;dbname=modelagem;port=3306','root','1234');

	$instrucaoSQL ="INSERT INTO usuario VALUES (default,'{$nome}','{$login}','{$senha}',{$nivel})";
	$result = $conexao->exec($instrucaoSQL);
	if ($result) {
		echo "Salvo com Sucesso";
	}else{
		echo "erro ao salvar";
	}