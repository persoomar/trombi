


* modifier la configuration pour integrer AdminLTE (common)
		Metrre a jours un alias pour le template

* installation de adminLTE (git)

* configuration de rbac (authmanger) common/config/
		yii migrate --migrationPath=@yii/rbac/migrations
		creation des permission et roles 

* Ajouter le dossier dump_files

* Ajouter les avatare par defaut 

* DB : Creating migrations (/console/migrations)
	   tables :
	   	 Log
	   	 direction
	   	 poste
	   	 fonction
	   	 agent 

	   	 migrate/up



* Creations des espaces photos et autorisations dans common/data

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
