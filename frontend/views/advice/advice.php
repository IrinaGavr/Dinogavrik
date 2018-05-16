<?php

use yii\helpers\Html;
use common\models\Ad;
use common\models\Advice;
?>
<h1>Статеечки</h1>
<div style="width: 100%">

    <?php foreach ($adviceName as $value): ?>
        <div style="width: 70%; float: right; height: 50px;">          

            <?= Html::encode("{$value->name}") ?>:<br>
            <hr style="color: gray">

        </div>
    <?php endforeach; ?>
</div>


<div style="clear: both; text-align: center"><?= \yii\widgets\LinkPager::widget(['pagination' => $pagination]) ?></div>