09/11/2016:




* Dbconnections :	environments/dev/common/config/main-local.php
	Configurer la connection a la base de developpement trombi.dev
			    'components' => [
		        'db' => [
		            'class' => 'yii\db\Connection',
		            'dsn' => 'mysql:host=localhost;dbname=trombi_dev',
		            'username' => 'root',
		            'password' => '1Kssable',
		            'charset' => 'utf8',
 	init the dev envi.
 	init migrate


* Confirgurations de l'application :
	Name : common config  maint.php


* .htaccess dans /web de fontend (verifier que le mod_rewrite et activé dans la config apache)
		Ajouter les trois fichier de rederiction (best practices)

* enable prety url (in common / config)


