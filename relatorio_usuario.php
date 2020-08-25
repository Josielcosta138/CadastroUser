<!DOCTYPE html>
<html>
<head>
	<title>Relatório  Usuário</title>
	<style type="text/css">
		table {
			width:100%;
			border:0;
		}
		table thead tr th , table tbody tr td {
			border:0;
		}
		table thead tr th{
			background-color:#A5AFC8;
			border-bottom: 2px solid #000;
		}
		table tbody tr td{
			border-bottom: 1px solid #000;
		}

		tfoot tr td {
			border:0;
			width:25%;
		}

		@media print{
			a {
				display: none;
			}

		}

	</style>
	<meta charset="utf-8">
</head>
<body bgcolor="#EDE7E7">
	<fieldset style = "width: 80%; margin: 50px auto;">
	<a href="#" onclick="window.print();">Imprimir</a>
	<h2><font face="Courier">Usuários Cadastrados</font></h2>
	<table border="1" ><!-- Tabela-->

		<!--<fieldset style = "width: 30%; margin: 50px auto;">
					<legend>Pesquisa - Relatório</legend>
					<a href="#">Imprimir</a>
		</fieldset>	-->	

		<thead>
			<tr>
				<th align="left">ID</th><!-- Colunas-->
				<th align="left">Nome</th>
				<th align="left">E-mail</th>
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
			
				if (isset($_POST["nome"])){
					$nome = $_POST["nome"];
					$where = $where . " AND nome LIKE '%{$nome}%'";
				}else{
					$nome = '';
				}

				if (isset($_POST["login"])){
					$login = $_POST["login"];
					$where = $where . " AND login LIKE '%{$login}%'";
				}else{
					$login = '';
				}

				$SQL = "SELECT * FROM usuario WHERE 1=1 {$where};";
				

				//DataSet informações retornam em ARRAY lINHAS TABELAS etc...
				$resultSet = $conexao->query($SQL);
				while ($linha = $resultSet->fetch()) {
					# code...
				
					//foreach ($linha as $key => $resultSet) {
			echo '
			<tr>
				<td>'.$linha["id"].'</td>
				<td>'.$linha["nome"].'</td>
				<td>'.$linha["login"].'</td>
			</tr>'
				;

			}
		?>
		</tbody>
		<tfoot>
			<tr>
				<td>Impresso em <?=date("d/m/Y H:i:s")?>.</td>
			</tr>
		</tfoot>
	</table>  
</fieldset>
  </body>
</html>
