<?php

use yii\helpers\Html;
use common\models\Ad;
?>
<h1>Статечки</h1>
<div style="width: 100%">
    <div style="width: 30%; float: left;"> </div>

    <?php foreach ($adviceName as $value): ?>
        <div style="width: 70%; float: right; height: 50px;">          

            <?= html::encode("{$value->name}") ?>:<br>
            <hr style="color: gray">

        </div>
    <?php endforeach; ?>
</div>


<div style="clear: both; text-align: center"><?= \yii\widgets\LinkPager::widget(['pagination' => $pagination]) ?></div>