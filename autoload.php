<?php
		//define autoload realizando carregamento automatico de arquivo(classe)
		//de acordo com sua instancia na aplicação
		spl_autoload_register(function($classe) {
			$diretorioBase = __DIR__."/".str_replace("\\", "/", $classe).".php";
			if(file_exists($diretorioBase)) {
				require_once $diretorioBase;
				return true;
			}else {
				echo "Arquivo com implementação da classe não existente !!" . "<br>\n";
				return false;
			}
		})
?>