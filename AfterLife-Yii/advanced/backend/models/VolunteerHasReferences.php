<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "volunteer_has_references".
 *
 * @property integer $volunteer_user_id
 * @property integer $references_id
 *
 * @property References $references
 * @property Volunteer $volunteerUser
 */
class VolunteerHasReferences extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'volunteer_has_references';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['volunteer_user_id', 'references_id'], 'required'],
            [['volunteer_user_id', 'references_id'], 'integer'],
            [['references_id'], 'exist', 'skipOnError' => true, 'targetClass' => References::className(), 'targetAttribute' => ['references_id' => 'id']],
            [['volunteer_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Volunteer::className(), 'targetAttribute' => ['volunteer_user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'volunteer_user_id' => 'Volunteer User ID',
            'references_id' => 'References ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReferences()
    {
        return $this->hasOne(References::className(), ['id' => 'references_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteerUser()
    {
        return $this->hasOne(Volunteer::className(), ['user_id' => 'volunteer_user_id']);
    }
}
