<?php
/* @var $this yii\web\View */
/* @var $model common\entities\Prices */

$this->title = 'Изменить: ' . $model->sort;

$this->params['breadcrumbs'][] = ['label' => 'Наши цены', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prices-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
