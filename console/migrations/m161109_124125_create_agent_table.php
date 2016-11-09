<?php

use yii\db\Migration;

/**
 * Handles the creation of table `agent`.
 */
class m161109_124125_create_agent_table extends Migration
{
    /**
     * @inheritdoc
     *
    /* Table fonctionnel : agent 
     *
     * Index : agent_index : sur le couple ( foncion et direction )
     *  
     * Cles Etrangère :
     *          1. fk_agent_direction   : Id de la table direction
     *          2. fk_agent_fonction    : Id de la table fonction
     *          3. fk_agent_poste       : Id de la table poste
     */
public function up()
{
    $this->createTable(  // Creation de la table agent   
        'agent', [ 
        'agent_id' => $this->primaryKey(), // id PK (auto-increment, unique integer)
        'pec' => $this->integer()->notNull()->unique(), // 'pec' matricule paie (identifiant unique de la DRH)
        'nom' => $this->string(25)->notnull(), // 'nom' Nom de la personne
        'prenom' => $this->string(20)->notnull(), // 'Prenom' Prenom de la personne
        'email' => $this->string(40), // 'email' oisehabitat
        'poste' => $this->integer(), // 'Poste' Poste téléphonique (Numéro d'appel interne)
        'nTel'  => $this->string(15), // 'NTel' Numero de téléphone de l'emploé
        'nPortable' => $this->string(15), // 'NPortable' Numero de téléphone portable de l'employé
        'dateEntree' => $this->datetime()->notNull(), // Date d'entrée en entreprise
        'dateSortie' => $this->datetime(), // Date de sortie de l'entreprise

        'photo' => $this->boolean()->notnull(), // 0 : Il n'y as pas de photo pour cet employé  / 1 : il y as bien une photo pour cet employé
        'autorisation' => $this->boolean()->notnull(), // 0 : Il n'y as pas d'autrisation CNIL  / 1 : il y as bien une autrisation CNIL 

        'fonction' => $this->integer()->notNull(), // 'fonction' fonction.fonction_id  / Fonction de l'employé
        'poste' => $this->integer()->notNull(), // 'poste' poste.poste_id  / Poste de l'employé
        'direction' => $this->integer()->notNull() // 'direction' = direction.direction_id / Direction d'attache de l'employé
                                                   // pour le DG / DGA / Administrateur .... Attaché a la direction 'OH'

        ]);

     $this->createIndex('agent_index', 'agent', ['fonction', 'direction']);  
     $this->addForeignKey('fk_agent_focntion', 'agent', 'fonction', 'fonction', 'fonction_id', 'CASCADE', 'CASCADE');
     $this->addForeignKey('fk_agent_poste', 'agent', 'poste', 'poste', 'poste_id', 'CASCADE', 'CASCADE');
     $this->addForeignKey('fk_agent_direction', 'agent', 'direction', 'direction', 'direction_id', 'CASCADE', 'CASCADE');
}
public function down()
{

    $this->dropForeignKey('fk_agent_focntion', 'agent');     
    $this->dropForeignKey('fk_agent_poste', 'agent');     
    $this->dropForeignKey('fk_agent_direction','agent');     

    $this->dropTable('agent'); // Supprimer la table agent
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
