<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ProductLang".
 *
 * @property int $id_prod
 * @property int $id_lang
 * @property int $idOld
 * @property int $id
 * @property int $tmp
 * @property string $name
 * @property string $item_product
 * @property string $title
 * @property string $meta_title (seo)
 * @property string $meta_descr
 * @property string $meta_keywords
 * @property string $url
 * @property string $url_manufacture
 * @property string $extra_text описание продукта
 * @property string $description_mini мини описание
 * @property string $press_release Используется как короткое описание для кросспостинга в блоги
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
 * @property int $_id_prod
 * @property string $_site_import
 * @property int $ropticsby
 * @property int $optica100Spb
 * @property int $leicaMicro
 */
class ProductLang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ProductLang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_prod', 'id_lang', 'idOld', 'id', 'name', 'item_product', 'meta_descr', 'meta_keywords', 'url'], 'required'],
            [['id_prod', 'id_lang', 'idOld', 'id', 'tmp', 'steth', 'otsc', 'ophthalm', 'rumex', 'rumexbaltics', 'ropticsru', 'greenoptic', 'optica100', 'ropticskz', 'ropticsua', 'mednabor', '_id_prod', 'ropticsby', 'optica100Spb', 'leicaMicro'], 'integer'],
            [['extra_text', 'description_mini', 'press_release'], 'string'],
            [['name', '_site_import'], 'string', 'max' => 255],
            [['item_product', 'url'], 'string', 'max' => 500],
            [['title'], 'string', 'max' => 70],
            [['meta_title', 'url_manufacture'], 'string', 'max' => 250],
            [['meta_descr'], 'string', 'max' => 215],
            [['meta_keywords'], 'string', 'max' => 50],
            [['id_prod', 'id_lang'], 'unique', 'targetAttribute' => ['id_prod', 'id_lang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prod' => 'Id Prod',
            'id_lang' => 'Id Lang',
            'idOld' => 'Id Old',
            'id' => 'ID',
            'tmp' => 'Tmp',
            'name' => 'Name',
            'item_product' => 'Item Product',
            'title' => 'Title',
            'meta_title' => 'Meta Title',
            'meta_descr' => 'Meta Descr',
            'meta_keywords' => 'Meta Keywords',
            'url' => 'Url',
            'url_manufacture' => 'Url Manufacture',
            'extra_text' => 'Extra Text',
            'description_mini' => 'Description Mini',
            'press_release' => 'Press Release',
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
            '_id_prod' => 'Id Prod',
            '_site_import' => 'Site Import',
            'ropticsby' => 'Ropticsby',
            'optica100Spb' => 'Optica100 Spb',
            'leicaMicro' => 'Leica Micro',
        ];
    }
}
