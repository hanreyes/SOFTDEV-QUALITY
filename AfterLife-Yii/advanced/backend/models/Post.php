<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $admin_id
 *
 * @property Dead[] $deads
 * @property Missing[] $missings
 * @property Admin $admin
 * @property User $user
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'admin_id'], 'required'],
            [['id', 'user_id', 'admin_id'], 'integer'],
            [['admin_id'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['admin_id' => 'id']],
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
            'user_id' => 'User ID',
            'admin_id' => 'Admin ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeads()
    {
        return $this->hasMany(Dead::className(), ['post_id' => 'id', 'post_user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMissings()
    {
        return $this->hasMany(Missing::className(), ['post_id' => 'id', 'post_user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdmin()
    {
        return $this->hasOne(Admin::className(), ['id' => 'admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
