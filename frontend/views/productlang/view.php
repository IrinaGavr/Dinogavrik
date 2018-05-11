<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ProductLang */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Product Langs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-lang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_prod' => $model->id_prod, 'id_lang' => $model->id_lang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_prod' => $model->id_prod, 'id_lang' => $model->id_lang], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_prod',
            'id_lang',
            'idOld',
            'id',
            'tmp',
            'name',
            'item_product',
            'title',
            'meta_title',
            'meta_descr',
            'meta_keywords',
            'url:url',
            'url_manufacture:url',
            'extra_text:ntext',
            'description_mini:ntext',
            'press_release:ntext',
            'steth',
            'otsc',
            'ophthalm',
            'rumex',
            'rumexbaltics',
            'ropticsru',
            'greenoptic',
            'optica100',
            'ropticskz',
            'ropticsua',
            'mednabor',
            '_id_prod',
            '_site_import',
            'ropticsby',
            'optica100Spb',
            'leicaMicro',
        ],
    ]) ?>

</div>
