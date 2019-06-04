<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "share".
 *
 * @property int $share_id
 * @property int $album_id
 * @property int $image_id
 * @property int $user_share
 * @property string $email_receive
 * @property string $description
 * @property string $date_create
 * @property int $status
 *
 * @property Album $album
 * @property Image $image
 * @property User $userShare
 */
class Share extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'share';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['album_id', 'image_id', 'user_share', 'status'], 'integer'],
            [['email_receive'], 'required'],
            [['description'], 'string'],
            [['date_create'], 'safe'],
            [['email_receive'], 'string', 'max' => 255],
            [['album_id'], 'exist', 'skipOnError' => true, 'targetClass' => Album::className(), 'targetAttribute' => ['album_id' => 'album_id']],
            [['image_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::className(), 'targetAttribute' => ['image_id' => 'image_id']],
            [['user_share'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_share' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'share_id' => 'Share ID',
            'album_id' => 'Album ID',
            'image_id' => 'Image ID',
            'user_share' => 'User Share',
            'email_receive' => 'Email Receive',
            'description' => 'Description',
            'date_create' => 'Date Create',
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
    public function getUserShare()
    {
        return $this->hasOne(User::className(), ['id' => 'user_share']);
    }
}
