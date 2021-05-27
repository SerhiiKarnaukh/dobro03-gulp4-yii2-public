<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\entities\Automobiles;

/* @var $this yii\web\View */
/* @var $model common\entities\Automobiles */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Automobiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="automobiles-view">

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' =>
        'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
        'confirm' => 'Вы точно хотите удалить эту запись?',
        'method' => 'post',
        ],
        ]) ?>
    </p>
    <div class="box">
        <div class="box-body">
            <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                        'id',
            'title',
            'image_name',
            'comfort',
            'sort',
            'status',
            ],
            ]) ?>

        </div>
    </div>
</div>
