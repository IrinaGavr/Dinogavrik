<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductLangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Langs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-lang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product Lang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_prod',
            'id_lang',
            'idOld',
            'id',
            'tmp',
            //'name',
            //'item_product',
            //'title',
            //'meta_title',
            //'meta_descr',
            //'meta_keywords',
            //'url:url',
            //'url_manufacture:url',
            //'extra_text:ntext',
            //'description_mini:ntext',
            //'press_release:ntext',
            //'steth',
            //'otsc',
            //'ophthalm',
            //'rumex',
            //'rumexbaltics',
            //'ropticsru',
            //'greenoptic',
            //'optica100',
            //'ropticskz',
            //'ropticsua',
            //'mednabor',
            //'_id_prod',
            //'_site_import',
            //'ropticsby',
            //'optica100Spb',
            //'leicaMicro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
