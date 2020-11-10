<?php
namespace app\models;
use Yii;
use yii\base\Model;

class RegistrationForm extends Model{

    public $username;
    public $password;
    public $name;
   // public $em;
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password','name'], 'required']
        ];
    }

    public function attributeLabels() {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
            'name'=>'Имя',
            'em'=>'E-mail'
        ];
    }

}