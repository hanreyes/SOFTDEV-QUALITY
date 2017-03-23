<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "volunteer_has_emergency_contacts".
 *
 * @property integer $volunteer_user_id
 * @property integer $emergency_contacts_id
 *
 * @property EmergencyContacts $emergencyContacts
 * @property Volunteer $volunteerUser
 */
class VolunteerHasEmergencyContacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'volunteer_has_emergency_contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['volunteer_user_id', 'emergency_contacts_id'], 'required'],
            [['volunteer_user_id', 'emergency_contacts_id'], 'integer'],
            [['emergency_contacts_id'], 'exist', 'skipOnError' => true, 'targetClass' => EmergencyContacts::className(), 'targetAttribute' => ['emergency_contacts_id' => 'id']],
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
            'emergency_contacts_id' => 'Emergency Contacts ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmergencyContacts()
    {
        return $this->hasOne(EmergencyContacts::className(), ['id' => 'emergency_contacts_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteerUser()
    {
        return $this->hasOne(Volunteer::className(), ['user_id' => 'volunteer_user_id']);
    }
}
