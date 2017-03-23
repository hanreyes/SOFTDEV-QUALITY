<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "missing".
 *
 * @property integer $id
 * @property integer $post_id
 * @property integer $post_user_id
 * @property string $submission_id
 * @property resource $photo
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $address
 * @property string $marital_status
 * @property string $sex
 * @property string $birthdate
 * @property string $age
 * @property string $occupation
 * @property string $date_of_disappearance
 * @property string $time_of_disappearance
 * @property string $last_seen
 * @property string $relationship_with_person
 * @property string $height
 * @property string $weight
 * @property string $eye_color
 * @property string $hair_length
 * @property string $hair_color
 * @property string $facial_hair
 * @property string $facial_hair_color
 * @property string $facial_hair_length
 * @property string $ear_shape
 * @property string $eyebrows_size
 * @property string $nose_size
 * @property string $hand_size
 * @property string $feet_size
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
 * @property string $glasses_color
 * @property string $contact_lens_color
 *
 * @property Post $post
 */
class Missing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'missing';
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
            [['submission_id', 'last_seen', 'scar_location', 'tattoo_location', 'birthmark_location', 'mole_location'], 'string', 'max' => 255],
            [['first_name', 'middle_name', 'last_name', 'marital_status', 'sex', 'birthdate', 'age', 'occupation', 'date_of_disappearance', 'time_of_disappearance', 'relationship_with_person', 'height', 'weight', 'eye_color', 'hair_length', 'hair_color', 'facial_hair', 'facial_hair_color', 'facial_hair_length', 'ear_shape', 'eyebrows_size', 'nose_size', 'hand_size', 'feet_size', 'distinguishing_features', 'upper_garment', 'upper_garment_color', 'lower_garment', 'lower_garment_color', 'footwear', 'eyewear', 'glasses_color', 'contact_lens_color'], 'string', 'max' => 45],
            [['address'], 'string', 'max' => 100],
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
            'photo' => 'Photo',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
            'marital_status' => 'Marital Status',
            'sex' => 'Sex',
            'birthdate' => 'Birthdate',
            'age' => 'Age',
            'occupation' => 'Occupation',
            'date_of_disappearance' => 'Date Of Disappearance',
            'time_of_disappearance' => 'Time Of Disappearance',
            'last_seen' => 'Last Seen',
            'relationship_with_person' => 'Relationship With Person',
            'height' => 'Height',
            'weight' => 'Weight',
            'eye_color' => 'Eye Color',
            'hair_length' => 'Hair Length',
            'hair_color' => 'Hair Color',
            'facial_hair' => 'Facial Hair',
            'facial_hair_color' => 'Facial Hair Color',
            'facial_hair_length' => 'Facial Hair Length',
            'ear_shape' => 'Ear Shape',
            'eyebrows_size' => 'Eyebrows Size',
            'nose_size' => 'Nose Size',
            'hand_size' => 'Hand Size',
            'feet_size' => 'Feet Size',
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
            'glasses_color' => 'Glasses Color',
            'contact_lens_color' => 'Contact Lens Color',
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
