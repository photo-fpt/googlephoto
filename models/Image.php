<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property int $image_id
 * @property int $album_id
 * @property string $image_title
 * @property string $image
 * @property string $path_image
 * @property string $description
 * @property string $date_create
 * @property string $date_update
 * @property string $location
 * @property int $status
 *
 * @property Album $album
 * @property Share[] $shares
 * @property Wistlist[] $wistlists
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['album_id', 'status'], 'integer'],
            [['image', 'date_create', 'date_update'], 'required'],
            [['description'], 'string'],
            [['date_create', 'date_update'], 'safe'],
            [['image_title', 'image', 'path_image', 'location'], 'string', 'max' => 255],
            [['album_id'], 'exist', 'skipOnError' => true, 'targetClass' => Album::className(), 'targetAttribute' => ['album_id' => 'album_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'image_id' => 'Image ID',
            'album_id' => 'Album ID',
            'image_title' => 'Image Title',
            'image' => 'Image',
            'path_image' => 'Path Image',
            'description' => 'Description',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'location' => 'Location',
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
    public function getShares()
    {
        return $this->hasMany(Share::className(), ['image_id' => 'image_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWistlists()
    {
        return $this->hasMany(Wistlist::className(), ['image_id' => 'image_id']);
    }

    public function getOneImage($id)
    {
        $data = Image::find()
            ->asArray()
            ->where('image_id=:id',['id'=>$id])
            ->one();
        return $data;
    }
}
