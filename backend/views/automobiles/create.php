<?php
/* @var $this yii\web\View */
/* @var $model common\entities\Automobiles */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Автомобили', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="automobiles-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
