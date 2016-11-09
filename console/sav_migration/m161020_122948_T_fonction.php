<?php

use yii\db\Migration;

class m161020_122948_T_fonction extends Migration
{
    public function up()
    {
        /* Table fonctionnel : T_Fonction
         *
         * Comporte les focntions recencé par la DRH
         * 
         * Cle Etrangère : fk_employe_focntion    
         * 
         */

        $this->createTable(  // Creation de la table T_Fonciton 
            'T_fonction', [ 
            'fonction_id' => $this->primaryKey(), // id PK (auto-increment, unique integer)
            'libelle' => $this->string(64)->notNull()->unique() // 'libelle' Libellé des fonction recencé par la DRH
            ]);
    }

    public function down()
    {
        $this->dropTable('T_fonction'); // Supprimer la table T_fonciton
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
