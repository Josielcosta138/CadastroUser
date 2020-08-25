<!DOCTYPE html>
<html>
<head>
	<title>Listar de Nível de Usuário</title>
	<style type="text/css">
		table {
			width:100%;
		}
		table thead tr th{
			background-color:#A5AFC8;
			border-bottom: 2px solid #000;
		}

	</style>
	<meta charset="utf-8">
</head>
<body bgcolor="#A9F5E1">
	<fieldset style = "width: 50%; margin: 50px auto;">
		 <legend><b><font face="Arial">Lista Nivel de Usuario</font></b></legend>
	<a href="descricao.php">Novo</a>
	<table border="1">
		
		</fieldset>
	<!--<table border="1" style = "width: 30%; margin: 50px auto;">-->
		<thead>
			<tr>
				<th>ID</th><!-- Colunas-->
				<th>Descrição</th>
				<th>Editar</th>
				<th>Excluir</th> 
			</tr>
		</thead>
		<tbody> <!--tbody Tag concorrente.-->

			<?php
				$conexao = new PDO('mysql:host=localhost;dbname=modelagem;port=3306','root','1234');


				$where = '';
				if (isset($_POST["id"])){
					$id = $_POST["id"]==""?0:$_POST["id"];
				if  ($id > 0){
					$where = $where . " AND id = {$id}";
					}
				}else{
					$id= 0;
				}
			
				if (isset($_POST["descricao"])){
					$descricao = $_POST["descricao"];
					$where = $where . " AND descricao LIKE '%{$descricao}%'";
				}else{
					$descricao = '';
				}

				$SQL = "SELECT * FROM nivelusuario WHERE 1=1 {$where};";
				

				//DataSet informações retornam em ARRAY lINHAS TABELAS etc...
				$resultSet = $conexao->query($SQL);
				while ($linha = $resultSet->fetch()) {
					# code...
				
					//foreach ($linha as $key => $resultSet) {
			echo '
			<tr>
				<td>'.$linha["id"].'</td>
				<td>'.$linha["descricao"].'</td>
				<td><a href="descricao.php?id=' .$linha["id"].'">Editar</a></td>
				<td><a onclick="excluir('.$linha["id"].')" href="#">Excluir</a></td>
			</tr>'
				;//excluir_nivelusuario.php?id='.$linha["id"].'

			}
		?>
		</tbody>
	</table>  
			<script type="text/javascript">
				
				function excluir(id){
					if (confirm('Deseja exluir?')){
						window.location.href ="excluir_nivelusuario.php?id=" +id;

					}
			}
	  </script>
   </body>
</html>
