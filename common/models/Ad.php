<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "AdviceLang".
 *
 * @property int $id_advice
 * @property int $id_lang
 * @property string $name
 * @property string $url
 * @property string $content
 * @property string $short_content
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $image_title
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
 * @property int $_id_advice
 * @property string $_site_import
 * @property int $ropticsby
 * @property int $optica100Spb
 * @property int $leicaMicro
 * @property int $id
 */
class Ad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'AdviceLang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_advice', 'id_lang', 'name', 'url', 'meta_title', 'meta_description'], 'required'],
            [['id_advice', 'id_lang', 'steth', 'otsc', 'ophthalm', 'rumex', 'rumexbaltics', 'ropticsru', 'greenoptic', 'optica100', 'ropticskz', 'ropticsua', 'mednabor', '_id_advice', 'ropticsby', 'optica100Spb', 'leicaMicro', 'id'], 'integer'],
            [['content', 'short_content'], 'string'],
            [['name', 'url', '_site_import'], 'string', 'max' => 255],
            [['meta_title'], 'string', 'max' => 120],
            [['meta_description'], 'string', 'max' => 512],
            [['meta_keywords'], 'string', 'max' => 256],
            [['image_title'], 'string', 'max' => 128],
            [['id_advice', 'id_lang'], 'unique', 'targetAttribute' => ['id_advice', 'id_lang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_advice' => 'Id Advice',
            'id_lang' => 'Id Lang',
            'name' => 'Name',
            'url' => 'Url',
            'content' => 'Content',
            'short_content' => 'Short Content',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'image_title' => 'Image Title',
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
            '_id_advice' => 'Id Advice',
            '_site_import' => 'Site Import',
            'ropticsby' => 'Ropticsby',
            'optica100Spb' => 'Optica100 Spb',
            'leicaMicro' => 'Leica Micro',
            'id' => 'ID',
        ];
    }
}
