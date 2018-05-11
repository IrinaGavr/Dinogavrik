<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProductLang */

$this->title = 'Create Product Lang';
$this->params['breadcrumbs'][] = ['label' => 'Product Langs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
