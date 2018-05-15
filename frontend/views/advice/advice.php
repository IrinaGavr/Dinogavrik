<?php

use yii\helpers\Html;
use common\models\Ad;
use common\models\Advice;
?>
<h1>Статечки</h1>
<div style="width: 100%">
    <div style="width: 30%; float: left;">
<<<<<<< HEAD
    <img src="/var/www/dinogavrik/images/<?php $model->'image'?>">
=======
    
>>>>>>> d622dc82aeb9d14b23fa76846b6098f3bd42a44a
    </div>

    <?php foreach ($adviceName as $value): ?>
        <div style="width: 70%; float: right; height: 50px;">          

            <?= Html::encode("{$value->name}") ?>:<br>
            <hr style="color: gray">

        </div>
    <?php endforeach; ?>
</div>


<div style="clear: both; text-align: center"><?= \yii\widgets\LinkPager::widget(['pagination' => $pagination]) ?></div>