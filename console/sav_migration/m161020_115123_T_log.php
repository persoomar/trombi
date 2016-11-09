<?php

use yii\db\Migration;

class m161020_115123_T_log extends Migration
{
    public function up()
    {
        $this->createTable(  // Creation de la table T_Log
            'T_log', [ 
            'log_id' => $this->primaryKey(), // id PK (auto-increment, unique integer)
            'Operation' => $this->string(64)->notNull(), // 'operation' is unique 'varchar' type with length of 64 chars, cannot be null
            'operateur' => $this->string(64)->notnull(), // 'operateur' is the person or the modul how demande the operation to do
            'created_at' => $this->datetime()->notNull() // 'created_at' is 'datetime' type, cannot be null
            ]);
    }

    public function down()
    {
        echo "m161020_115123_T_log Table log qui ne peu pas etre reverted.\n";

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
