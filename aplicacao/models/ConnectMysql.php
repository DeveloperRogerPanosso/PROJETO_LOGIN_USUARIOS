<?php
		//define namespace para classe
		namespace aplicacao\models;

		class ConnectMysql {
			private static $instancePdo;

			private function __construct(){}
			private function __clone(){}

			public static function getInstancePdo() {
				if(!isset($instancePdo)) {
					try {
						self::$instancePdo = new \PDO("mysql:dbname=login;host=localhost", "root", "");
						self::$instancePdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
					} catch (PDOException $erro) {
						echo "Erro de Conexão: " . $erro->getMessage() . "<br>\n";
						echo "Linha: " . $erro->getLine() . "<br>\n";
						echo "Código: " . $erro->getCode() . "<br>\n";
						echo "Arquivo: " . $erro->getFile() . "<br>\n";
					}
					return self::$instancePdo;
				}
			}
		}
?>