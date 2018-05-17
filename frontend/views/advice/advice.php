<h1>Статеечки</h1>
<div style="width: 100%">
    <?=
    \yii\widgets\ListView::widget([
        'dataProvider' => $provider,
        'itemView' => '_adviceItem',
    ])
    ?>
</div>