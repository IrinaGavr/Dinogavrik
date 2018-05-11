<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<h3>Введи свое имя, друг</h3>
<?= $form->field($model, 'name')->label('') ?>

<div class="form-group">        
<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>