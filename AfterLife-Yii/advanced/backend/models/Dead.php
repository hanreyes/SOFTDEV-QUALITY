<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dead".
 *
 * @property integer $id
 * @property integer $post_id
 * @property integer $post_user_id
 * @property string $submission_id
 * @property string $general_condition
 * @property string $body_part_found
 * @property string $body_condition
 * @property string $apparent_sex
 * @property string $age_group
 * @property string $height
 * @property string $weight
 * @property string $hair_length
 * @property string $hair_color
 * @property string $facial_hair_type
 * @property string $facial_hair_length
 * @property string $facial_hair_color
 * @property string $distinguishing_features
 * @property string $scar_location
 * @property string $tattoo_location
 * @property string $birthmark_location
 * @property string $mole_location
 * @property string $upper_garment
 * @property string $upper_garment_color
 * @property string $lower_garment
 * @property string $lower_garment_color
 * @property string $footwear
 * @property string $eyewear
 * @property string $galsses_color
 * @property string $contact_lens_color
 * @property resource $photo
 *
 * @property Post $post
 */
class Dead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dead';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'post_id', 'post_user_id'], 'required'],
            [['id', 'post_id', 'post_user_id'], 'integer'],
            [['photo'], 'string'],
            [['submission_id', 'scar_location', 'tattoo_location', 'birthmark_location', 'mole_location'], 'string', 'max' => 255],
            [['general_condition', 'body_part_found', 'body_condition', 'apparent_sex', 'age_group', 'height', 'weight', 'hair_length', 'hair_color', 'facial_hair_type', 'facial_hair_length', 'facial_hair_color', 'distinguishing_features', 'upper_garment', 'upper_garment_color', 'lower_garment', 'lower_garment_color', 'footwear', 'eyewear', 'galsses_color', 'contact_lens_color'], 'string', 'max' => 45],
            [['post_id', 'post_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['post_id' => 'id', 'post_user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'post_user_id' => 'Post User ID',
            'submission_id' => 'Submission ID',
            'general_condition' => 'General Condition',
            'body_part_found' => 'Body Part Found',
            'body_condition' => 'Body Condition',
            'apparent_sex' => 'Apparent Sex',
            'age_group' => 'Age Group',
            'height' => 'Height',
            'weight' => 'Weight',
            'hair_length' => 'Hair Length',
            'hair_color' => 'Hair Color',
            'facial_hair_type' => 'Facial Hair Type',
            'facial_hair_length' => 'Facial Hair Length',
            'facial_hair_color' => 'Facial Hair Color',
            'distinguishing_features' => 'Distinguishing Features',
            'scar_location' => 'Scar Location',
            'tattoo_location' => 'Tattoo Location',
            'birthmark_location' => 'Birthmark Location',
            'mole_location' => 'Mole Location',
            'upper_garment' => 'Upper Garment',
            'upper_garment_color' => 'Upper Garment Color',
            'lower_garment' => 'Lower Garment',
            'lower_garment_color' => 'Lower Garment Color',
            'footwear' => 'Footwear',
            'eyewear' => 'Eyewear',
            'galsses_color' => 'Galsses Color',
            'contact_lens_color' => 'Contact Lens Color',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::className(), ['id' => 'post_id', 'user_id' => 'post_user_id']);
    }
}
