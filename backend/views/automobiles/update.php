<?php
/* @var $this yii\web\View */
/* @var $model common\entities\Automobiles */

$this->title = 'Изменить: ' . $model->title;

$this->params['breadcrumbs'][] = ['label' => 'Автомобили', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="automobiles-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
