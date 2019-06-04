<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "album".
 *
 * @property int $album_id
 * @property string $album_title
 * @property string $album_image
 * @property string $date_create
 * @property string $date_update
 * @property int $status
 *
 * @property Image[] $images
 * @property Share[] $shares
 * @property Wistlist[] $wistlists
 */
class Album extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'album';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_create', 'date_update'], 'safe'],
            [['date_update', 'status'], 'required'],
            [['status'], 'integer'],
            [['album_title', 'album_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'album_id' => 'Album ID',
            'album_title' => 'Album Title',
            'album_image' => 'Album Image',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['album_id' => 'album_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShares()
    {
        return $this->hasMany(Share::className(), ['album_id' => 'album_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWistlists()
    {
        return $this->hasMany(Wistlist::className(), ['album_id' => 'album_id']);
    }
}
