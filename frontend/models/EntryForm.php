<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model  {

    public $name;
    
    public function rules() {
        parent::rules();
        
        return [
            [['name'], 'required'],
        ];
       
    }
    
}
