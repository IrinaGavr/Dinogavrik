<?php
use yii\helpers\Html;
use common\models\Attribute;
?>

<?php foreach ($attribute as $value): ?>
    <ul>
        <li>
    <?= html::encode("{$value->name} ({$value->id})") ?>:
    <? //= $value->population ?>
    </li>
    <?php endforeach; ?>
    </ul>

<?=\yii\widgets\LinkPager::widget(['pagination' => $pagination])?>