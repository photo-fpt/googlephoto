<?php
namespace app\models;
use yii\base\Model;
class Hello extends Model{
    public $user;
    public $pass;

    public function setLogin($user, $pass){
        $this->pass =$pass;
        $this->user = $user;
    }
    public function getLogin(){
        return $this->user.'<br>'.$this->pass;
    }
}
?>

