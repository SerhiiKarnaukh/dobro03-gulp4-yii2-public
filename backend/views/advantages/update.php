<?php
/* @var $this yii\web\View */
/* @var $model common\entities\Advantages */

$this->title = 'Изменить: ' . $model->title;

$this->params['breadcrumbs'][] = ['label' => 'Преимущества', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="advantages-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
