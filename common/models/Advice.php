<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Advice".
 *
 * @property int $id
 * @property int $id_prefix
 * @property int $_id_import (для импорта) хранит id из другого магазина
 * @property string $_site_import (для импорта) сайт с которого был произведен импорт
 * @property string $image
 * @property int $prof используется для профи (введено для r-optics.ru)
 * @property int $active
 * @property int $sort
 * @property int $viewcategory
 * @property string $date_added
 * @property string $date_modified
 * @property int $steth
 * @property int $otsc
 * @property int $ophthalm
 * @property int $rumex
 * @property int $rumexbaltics
 * @property int $ropticsru
 * @property int $greenoptic
 * @property int $optica100
 * @property int $ropticskz
 * @property int $ropticsua
 * @property int $mednabor
 * @property int $_id
 * @property int $_id_prefix
 * @property string $url
 * @property int $ropticsby
 * @property int $optica100Spb
 * @property int $leicaMicro
 */
class Advice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Advice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_prefix', '_id_import', 'prof', 'active', 'sort', 'viewcategory', 'steth', 'otsc', 'ophthalm', 'rumex', 'rumexbaltics', 'ropticsru', 'greenoptic', 'optica100', 'ropticskz', 'ropticsua', 'mednabor', '_id', '_id_prefix', 'ropticsby', 'optica100Spb', 'leicaMicro'], 'integer'],
            [['date_added', 'date_modified'], 'safe'],
            [['_site_import'], 'string', 'max' => 200],
            [['image'], 'string', 'max' => 128],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_prefix' => 'Id Prefix',
            '_id_import' => 'Id Import',
            '_site_import' => 'Site Import',
            'image' => 'Image',
            'prof' => 'Prof',
            'active' => 'Active',
            'sort' => 'Sort',
            'viewcategory' => 'Viewcategory',
            'date_added' => 'Date Added',
            'date_modified' => 'Date Modified',
            'steth' => 'Steth',
            'otsc' => 'Otsc',
            'ophthalm' => 'Ophthalm',
            'rumex' => 'Rumex',
            'rumexbaltics' => 'Rumexbaltics',
            'ropticsru' => 'Ropticsru',
            'greenoptic' => 'Greenoptic',
            'optica100' => 'Optica100',
            'ropticskz' => 'Ropticskz',
            'ropticsua' => 'Ropticsua',
            'mednabor' => 'Mednabor',
            '_id' => 'Id',
            '_id_prefix' => 'Id Prefix',
            'url' => 'Url',
            'ropticsby' => 'Ropticsby',
            'optica100Spb' => 'Optica100 Spb',
            'leicaMicro' => 'Leica Micro',
        ];
    }
    
    public function getImage() {
        
        return Yii::$app->params['url']['advices'].$this->image;
      
        
    }
    

}
