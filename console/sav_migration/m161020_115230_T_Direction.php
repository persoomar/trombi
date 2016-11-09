<?php

use yii\db\Migration;

class m161020_115230_T_Direction extends Migration
{
    public function up()
    {

        /* Table fonctionnel : T_Direction 
         *
         * Comporte les differentes directions et sous directions
         * Le champs "dependance" Determine s 'il s'agit d'une direction ou d'une sous directioin 
         * Toute directioin depond de "OH"
         * "OH" Depond de "OH" : Societé
         *
         * Cles etrangère : fk_employe_direction
         *
         */

        $this->createTable(  // Creation de la table T_Direction     
            'T_direction', [ 
            'direction_id' => $this->primaryKey(), // id PK (auto-increment, unique integer)
            'lib_court' => $this->string(10)->notNull()->unique(), // 'lib_court' Nom court de la directrion DSI / DRFCI ...
            'lib_long' => $this->string(64)->notnull(), // 'lib_long' Nom lond de la direction Direction des systéme d'information
            'dependance' => $this->string(10)->notNull() // 'dependance' Si direction principal dependance ='OH' / Si sous direction dependance =lib_court direction principal / Si OH = OH
            ]);
    }

    public function down()
    {
        
        $this->dropTable('T_direction'); // Supprimer la table T_direction
        
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
