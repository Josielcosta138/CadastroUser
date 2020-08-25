<?php

#ESSE DIRETÓRIO IRÁ JOGAR PARA HOME.HTML

$model = "core/model/{$controller}.php";
if (file_exists($model)){
	include $model;
}else{
	echo "Não foi possivel carregar o arquivo";
	exit;
}

$pathlogo = Home::$PATHLOGO;
if (!file_exists($pathlogo)) {
	$pathlogo = "src/img/semimagem.png";
}

$view = 'core/view/'.$controller.'.html';
if (file_exists($view)){
	$conteudo = file_get_contents($view);  //file_get_contents (Cópia)
	//echo str_replace('{{pathlogo}}',$pathlogo, $conteudo);  /* 1 {{pathlogo}} -Troca de ARQUIVOS  2 $pathlogo local 3 $conteudo*/

	$cpf = '069.870.209-30';

	 //preg_match - Executa uma correspondência de expressão regular
	if (preg_match_all('/{{[a-z_]+}}/i',$conteudo, $matches)){
		var_dump($matches);
	}
	
}