<?php

use yii\db\Migration;

class m161020_123132_T_employe extends Migration
{
    public function up()
    {

        /* Table fonctionnel : T_employe 
         *
         * Index : employe_index : sur le couple ( foncion et direction )
         *  
         * Cles Etrangère :
         *          1. fk_employe_focntion    : Id de la table T_fonction
         *          2. fk_employe_direction   : Id de la table T_employe
         */
public function up()
{
        $this->createTable(  // Creation de la table T_employe   
            'T_employe', [ 
            'employe_id' => $this->primaryKey(), // id PK (auto-increment, unique integer)
            'pec' => $this->integer()->notNull()->unique(), // 'pec' matricule paie (identifiant unique de la DRH)
            'nom' => $this->string(25)->notnull(), // 'nom' Nom de la personne
            'prenom' => $this->string(20)->notnull(), // 'Prenom' Prenom de la personne
            'email' => $this->string(40), // 'email' oisehabitat
            'poste' => $this->integer(), // 'Poste' Poste téléphonique (Numéro d'appel interne)
            'nTel'  => $this->string(15), // 'NTel' Numero de téléphone de l'emploé
            'nPortable' => $this->string(15), // 'NPortable' Numero de téléphone portable de l'employé

            'photo' => $this->boolean()->notnull(), // 0 : Il n'y as pas de photo pour cet employé  / 1 : il y as bine une photo pour cet employé
            'autorisation' => $this->boolean()->notnull(), // 0 : Il n'y as pas d'autrisation CNIL  / 1 : il y as bien une autrisation CNIL 

            'fonction' => $this->integer()->notNull(), // 'fonction' T_Fonction.id  / Fonction de l'employé
            'direction' => $this->integer()->notNull() // 'direction' = T_direction.id / Direction d'attache de l'employé


            ]);

         $this->createIndex('employe_index', 'T_employe', ['fonction', 'direction']);  
         $this->addForeignKey('fk_employe_focntion', 'T_employe', 'fonction', 'T_fonction', 'fonction_id', 'CASCADE', 'CASCADE');
         $this->addForeignKey('fk_employe_direction', 'T_employe', 'direction', 'T_direction', 'direction_id', 'CASCADE', 'CASCADE');
    }
    public function down()
    {
        $this->dropForeignKey('fk_employe_focntion', 'T_employe');     
        $this->dropForeignKey('fk_employe_direction','T_employe');     

        $this->dropTable('T_employe'); // Supprimer la table T_employe
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
