<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "direction".
 *
 * @property integer $direction_id
 * @property string $lib_court
 * @property string $lib_long
 * @property string $dependance
 *
 * @property Agent[] $agents
 */
class Direction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'direction';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lib_court', 'lib_long' ], 'required'],
            [['lib_court', 'dependance'], 'string', 'max' => 10],
            [['dependance'], 'default', 'value' => 'OH'],
            [['lib_long'], 'string', 'max' => 64],
            [['lib_court'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'direction_id' => 'Direction ID',
            'lib_court' => 'Lib Court',
            'lib_long' => 'Lib Long',
            'dependance' => 'Dependance',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgents()
    {
        return $this->hasMany(Agent::className(), ['direction' => 'direction_id']);
    }
}
