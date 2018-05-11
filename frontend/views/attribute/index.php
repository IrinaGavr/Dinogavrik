<?php

use yii\helpers\Html;
use common\models\Attribute;
?>


<ul>
        <?php foreach ($attribute as $value): ?>
        <li>
            <?= html::encode("{$value->name}") ?>:
        <?= $value->id ?></li>
<?php endforeach; ?>
</ul>

<?=
\yii\widgets\LinkPager::widget(['pagination' => $pagination])?>