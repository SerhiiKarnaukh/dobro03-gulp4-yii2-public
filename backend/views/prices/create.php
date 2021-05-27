<?php
/* @var $this yii\web\View */
/* @var $model common\entities\Prices */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Наши цены', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prices-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
