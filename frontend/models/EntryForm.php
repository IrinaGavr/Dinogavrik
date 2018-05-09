<?php

namespace frontend\models;

use Yii;
use yii\base\Model;


class EntryForm extends Model  {

    public $name;
    public $email;
    
    public function rules() {
        parent::rules();
        
        return [
            [['name','email'], 'required'],
            ['email', 'email'],
        ];
    }
    
}
