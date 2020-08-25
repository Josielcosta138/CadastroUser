<?php
		
	// EXEC sempre RETORNA VERDADEIRO OU FALSO
	// QUERY RETORNA verdairo falso E os DADOS		
	$conexao = new PDO('mysql:host=localhost;dbname=modelagem;port=3306','root','1234');

	$sql ="DELETE FROM nivelusuario WHERE id = ". $_GET["id"];
	if	($conexao->exec($sql)){
		header('Location: listar_nivelusuario.php');
}else{
	echo 'Erro ao Excluir';
	}

?>

