<?php

use yii\db\Migration;

/**
 * Handles the creation of table `fonction`.
 */
class m161109_112704_create_fonction_table extends Migration
{
    /**
     * @inheritdoc
     *
     * Table métier : fonction
     *
     * Comporte les fonctions recencé par la DRH
     * 
     * Cle Etrangère : fk_agent_fonction
     * 
     */
    public function up()
    {
        $this->createTable(  // Creation de la table fonction
            'fonction', [ 
            'fonction_id' => $this->primaryKey(),                      // id PK (auto-increment, unique integer)
            'libelle' => $this->string(64)->notNull()->unique()     // 'libelle' Libellé des fonctions recencé par la DRH
            ]);
    }

    public function down()
    {
        $this->dropTable('fonction'); // Supprimer la table fonction
        //TODO : Ajouter une ligne dans la table log
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
