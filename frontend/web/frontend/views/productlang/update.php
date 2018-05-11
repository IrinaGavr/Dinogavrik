<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProductLang */

$this->title = 'Update Product Lang: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Product Langs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id_prod' => $model->id_prod, 'id_lang' => $model->id_lang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-lang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
