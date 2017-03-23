<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "emergency_contacts".
 *
 * @property integer $id
 * @property string $name
 * @property string $relationship_with_person
 * @property string $phone_number
 *
 * @property VolunteerHasEmergencyContacts[] $volunteerHasEmergencyContacts
 * @property Volunteer[] $volunteerUsers
 */
class EmergencyContacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emergency_contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name', 'relationship_with_person'], 'string', 'max' => 45],
            [['phone_number'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'relationship_with_person' => 'Relationship With Person',
            'phone_number' => 'Phone Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteerHasEmergencyContacts()
    {
        return $this->hasMany(VolunteerHasEmergencyContacts::className(), ['emergency_contacts_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteerUsers()
    {
        return $this->hasMany(Volunteer::className(), ['user_id' => 'volunteer_user_id'])->viaTable('volunteer_has_emergency_contacts', ['emergency_contacts_id' => 'id']);
    }
}
