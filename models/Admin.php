<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id
 * @property string $fullname
 * @property string $username
 * @property string $password
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    public function getAllAdmin(){
        return Admin::find()->all();
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required','message'=>'Không được rỗng'],
            [['fullname', 'username', 'password'], 'string', 'max' => 50],
            [['username'],'unique']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Full Name',
            'username' => 'UserName',
            'password' => 'PassWord',
        ];
    }

    //kiem tra dang nhap
    public function kiemtradangnhap($username,$password){
        $dong = Admin::find()->where(['username'=>$username,'password'=>$password])->count();
        if ($dong==1){
            return true;
        }
        else{
            return false;
        }
    }
}
