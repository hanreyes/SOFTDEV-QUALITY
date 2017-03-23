<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "volunteer".
 *
 * @property integer $id
 * @property string $address
 * @property string $volunteer_experience
 * @property string $occupation
 * @property string $educational_attainment
 * @property string $availability
 * @property string $serve_more_than_one
 * @property string $driver_license
 * @property string $convicted
 * @property string $conviction_reason
 * @property string $physical_limitation
 * @property string $limitation_description
 * @property integer $user_id
 *
 * @property User $user
 * @property VolunteerHasEmergencyContacts[] $volunteerHasEmergencyContacts
 * @property EmergencyContacts[] $emergencyContacts
 * @property VolunteerHasReferences[] $volunteerHasReferences
 * @property References[] $references
 */
class Volunteer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'volunteer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['address', 'availability', 'conviction_reason', 'limitation_description'], 'string', 'max' => 255],
            [['volunteer_experience', 'occupation', 'educational_attainment', 'serve_more_than_one', 'driver_license', 'convicted', 'physical_limitation'], 'string', 'max' => 45],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'volunteer_experience' => 'Volunteer Experience',
            'occupation' => 'Occupation',
            'educational_attainment' => 'Educational Attainment',
            'availability' => 'Availability',
            'serve_more_than_one' => 'Serve More Than One',
            'driver_license' => 'Driver License',
            'convicted' => 'Convicted',
            'conviction_reason' => 'Conviction Reason',
            'physical_limitation' => 'Physical Limitation',
            'limitation_description' => 'Limitation Description',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteerHasEmergencyContacts()
    {
        return $this->hasMany(VolunteerHasEmergencyContacts::className(), ['volunteer_user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmergencyContacts()
    {
        return $this->hasMany(EmergencyContacts::className(), ['id' => 'emergency_contacts_id'])->viaTable('volunteer_has_emergency_contacts', ['volunteer_user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteerHasReferences()
    {
        return $this->hasMany(VolunteerHasReferences::className(), ['volunteer_user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReferences()
    {
        return $this->hasMany(References::className(), ['id' => 'references_id'])->viaTable('volunteer_has_references', ['volunteer_user_id' => 'user_id']);
    }
}
