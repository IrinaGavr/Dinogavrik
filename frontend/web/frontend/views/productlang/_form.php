<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductLang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-lang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_prod')->textInput() ?>

    <?= $form->field($model, 'id_lang')->textInput() ?>

    <?= $form->field($model, 'idOld')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'tmp')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_descr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_manufacture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'extra_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description_mini')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'press_release')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'steth')->textInput() ?>

    <?= $form->field($model, 'otsc')->textInput() ?>

    <?= $form->field($model, 'ophthalm')->textInput() ?>

    <?= $form->field($model, 'rumex')->textInput() ?>

    <?= $form->field($model, 'rumexbaltics')->textInput() ?>

    <?= $form->field($model, 'ropticsru')->textInput() ?>

    <?= $form->field($model, 'greenoptic')->textInput() ?>

    <?= $form->field($model, 'optica100')->textInput() ?>

    <?= $form->field($model, 'ropticskz')->textInput() ?>

    <?= $form->field($model, 'ropticsua')->textInput() ?>

    <?= $form->field($model, 'mednabor')->textInput() ?>

    <?= $form->field($model, '_id_prod')->textInput() ?>

    <?= $form->field($model, '_site_import')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ropticsby')->textInput() ?>

    <?= $form->field($model, 'optica100Spb')->textInput() ?>

    <?= $form->field($model, 'leicaMicro')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
