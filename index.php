<?php
	
	$controller = 'home'; #RECEBE O NOME DO DIRETÓRIO
	$pathcontroller = 'core/controller/'.$controller.'.php'; # CHAMA O CAMINHO PARA O COTROLLER
	if (file_exists($pathcontroller)) {
		include $pathcontroller; 
	}