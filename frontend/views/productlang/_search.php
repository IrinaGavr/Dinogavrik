<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductLangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-lang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_prod') ?>

    <?= $form->field($model, 'id_lang') ?>

    <?= $form->field($model, 'idOld') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tmp') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'item_product') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'meta_title') ?>

    <?php // echo $form->field($model, 'meta_descr') ?>

    <?php // echo $form->field($model, 'meta_keywords') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'url_manufacture') ?>

    <?php // echo $form->field($model, 'extra_text') ?>

    <?php // echo $form->field($model, 'description_mini') ?>

    <?php // echo $form->field($model, 'press_release') ?>

    <?php // echo $form->field($model, 'steth') ?>

    <?php // echo $form->field($model, 'otsc') ?>

    <?php // echo $form->field($model, 'ophthalm') ?>

    <?php // echo $form->field($model, 'rumex') ?>

    <?php // echo $form->field($model, 'rumexbaltics') ?>

    <?php // echo $form->field($model, 'ropticsru') ?>

    <?php // echo $form->field($model, 'greenoptic') ?>

    <?php // echo $form->field($model, 'optica100') ?>

    <?php // echo $form->field($model, 'ropticskz') ?>

    <?php // echo $form->field($model, 'ropticsua') ?>

    <?php // echo $form->field($model, 'mednabor') ?>

    <?php // echo $form->field($model, '_id_prod') ?>

    <?php // echo $form->field($model, '_site_import') ?>

    <?php // echo $form->field($model, 'ropticsby') ?>

    <?php // echo $form->field($model, 'optica100Spb') ?>

    <?php // echo $form->field($model, 'leicaMicro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
