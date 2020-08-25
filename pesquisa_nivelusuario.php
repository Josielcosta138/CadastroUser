<html>
<html lang="pt-br">
	<head>
			<title>Pesquisa de Nivel de Usuario</title>
			<meta charset="utf-8">
	</head>

	<body bgcolor="#A9F5E1">
		<form action="listar_nivelusuario.php" method="POST" target="resultado">
			<fieldset >
					<legend>Pesquisa - Consulta</legend>
					<label for="id" name="id">ID</label>
					<input type="text" id="id" name="id">
					<label for="descricao">Descrição</label>
					<input type="text" id="descricao" name="descricao">
					<input type="submit" value="Pesquisar" />
			</fieldset>
		</form>
		<iframe id="resultado" name="resultado"  src="listar_nivelusuario.php" frameborder="0"></iframe>
		
	</body>
</html>	




