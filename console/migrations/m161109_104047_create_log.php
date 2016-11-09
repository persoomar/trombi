<?php

use yii\db\Migration;

class m161109_104047_create_log extends Migration
{
    public function up()
    {
        $this->createTable('log', [                               // creates new table named 'tag'
            'id' => $this->primaryKey(),                          // id is PK (auto-increment, unique integer)
            'event' => $this->string(64)->notNull()->unique(),    // 'event' is unique 'varchar' type with length of 64 chars, cannot be null
            'created_at' => $this->datetime()->notNull(),         // 'created_at' is 'datetime' type, cannot be null
            'updated_at' => $this->datetime(),                    // 'updated_at' is 'datetime' type, can be null, default will be null
        ]);
    }

    public function down()
    {
        echo "m161109_104047_create_log Table de log ne peu pourra pas etre initialisé.\n";

        // TODO : Inserer une ligne dans la table de log pour notifier l'action

       // this->dropTable('log'); // drops existing table with name 'tag'


        return false;
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
