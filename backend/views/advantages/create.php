<?php
/* @var $this yii\web\View */
/* @var $model common\entities\Advantages */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Преимущества', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advantages-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
