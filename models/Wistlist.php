<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wistlist".
 *
 * @property int $wis_id
 * @property int $image_id
 * @property int $album_id
 * @property int $user_wist
 * @property string $date_wistlist
 * @property int $status
 *
 * @property Album $album
 * @property Image $image
 * @property User $userWist
 */
class Wistlist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wistlist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image_id', 'album_id', 'user_wist', 'status'], 'integer'],
            [['date_wistlist', 'status'], 'required'],
            [['date_wistlist'], 'safe'],
            [['album_id'], 'exist', 'skipOnError' => true, 'targetClass' => Album::className(), 'targetAttribute' => ['album_id' => 'album_id']],
            [['image_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::className(), 'targetAttribute' => ['image_id' => 'image_id']],
            [['user_wist'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_wist' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'wis_id' => 'Wis ID',
            'image_id' => 'Image ID',
            'album_id' => 'Album ID',
            'user_wist' => 'User Wist',
            'date_wistlist' => 'Date Wistlist',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbum()
    {
        return $this->hasOne(Album::className(), ['album_id' => 'album_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImage()
    {
        return $this->hasOne(Image::className(), ['image_id' => 'image_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserWist()
    {
        return $this->hasOne(User::className(), ['id' => 'user_wist']);
    }
}
