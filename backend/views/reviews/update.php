<?php
/* @var $this yii\web\View */
/* @var $model common\entities\Reviews */

$this->title = 'Изменить: ' . $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Отзывы', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
