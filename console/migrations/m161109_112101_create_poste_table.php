<?php

use yii\db\Migration;

/**
 * Handles the creation of table `poste`.
 */
class m161109_112101_create_poste_table extends Migration
{
    /**
     * @inheritdoc
     *
    /* Table métier : poste
     *
     * Comporte les postes recencé par la DRH
     * 
     * Cle Etrangère : fk_agent_poste
     * 
     */
    public function up()
    {

        $this->createTable(  // Creation de la table poste
            'poste', [ 
            'poste_id' => $this->primaryKey(),                      // id PK (auto-increment, unique integer)
            'libelle' => $this->string(64)->notNull()->unique()     // 'libelle' Libellé des poste recencé par la DRH
            ]);
    }

    public function down()
    {
        $this->dropTable('poste'); // Supprimer la table poste
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
