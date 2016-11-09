<?php

use yii\db\Migration;

/**
 * Handles the creation of table `direction`.
 */
class m161109_105933_create_direction_table extends Migration
{
      /* Table fonctionnel : direction 
         *
         * Comporte les differentes directions et sous directions
         * Le champs "dependance" Determine s 'il s'agit d'une direction ou d'une sous directioin (service) 
         * Toute directioin (dire principal ) depond de "OH"
         * Le service "OH" (societé) Depond de "OH" : Societé
         *
         * Cles etrangère : fk_agent_direction_id
         *
         */
public function up()
{
        $this->createTable(  // Creation de la table direction     
            'direction', [ 
            'direction_id' => $this->primaryKey(),                 // id PK (auto-increment, unique integer)
            'lib_court' => $this->string(10)->notNull()->unique(), // 'lib_court' Nom court de la directrion DSI / DRFCI ...
            'lib_long' => $this->string(64)->notnull(),            // 'lib_long' Nom long de la direction 
            'dependance' => $this->string(10)->notNull()           // 'dependance' Si direction principal dependance ='OH' 
                                                                   //  Si sous service dependance = lib_court direction principal 
                                                                   //  Si direction = OH => dependance = OH
            ]);
    }

    public function down()
    {
        
        $this->dropTable('direction'); // Supprimer la table direction
        
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
