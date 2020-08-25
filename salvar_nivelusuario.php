<?php 

$id = $_POST["id"];
$descricao = $_POST["descricao"];

	if ($descricao ==""){
		echo "O campo descricao é obrigatório";
		exit;
	}
	
	if (strlen($descricao) <3){
		echo "O campo descricão tem que ter pelo menos 3 caracteres";
		exit;
	}

	
//Conexão com o Banco de Dados

$conexao = new PDO('mysql:host=localhost;dbname=modelagem;port=3306','root','1234');

if (isset($id)) {
	if (is_numeric($id)) {
		if ($id > 0) {
				$instrucaoSQL = "UPDATE nivelusuario SET descricao = '{$descricao}' WHERE id = ".$id;
				echo 'Cliente Editado com sucesso!!!!';

			} else {
				$instrucaoSQL = "INSERT INTO nivelusuario (descricao) VALUES ('{$descricao}');";
			}
									
		}else{
		echo 'Parametro invalido';
		exit;

	}
}else{
	echo "Indentificador não registrado";
	exit;
}

	//$instrucaoSQL = "INSERT INTO nivelusuario (descricao) VALUES ('{$descricao}');";
	$result = $conexao->exec($instrucaoSQL);
	
		if ($result == true){
			echo 'Cliente inserido com sucesso!!!!';
		}else{
			echo 'Erro ao salvar';
		}