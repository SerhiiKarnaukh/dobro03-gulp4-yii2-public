<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\entities\Reviews;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\forms\ReviewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-index">
    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success'])
        ?>
    </p>

    <div class="box">
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    [
                        'attribute' => 'created_at',
                        'format' => 'raw',
                        'value' => function (Reviews $data) {
                            return Yii::$app->formatter->asDate($data->created_at, 'dd.MM.yyyy HH:mm');
                        },
                        'filter' => DatePicker::widget([
                            'model' => $searchModel,
                            'attribute' => 'created_at',
                            'type' => DatePicker::TYPE_COMPONENT_APPEND,
                            'pluginOptions' => [
                                'todayHighlight' => true,
                                'todayBtn' => true,
                                'autoclose' => true,
                                'format' => 'dd.mm.yyyy',
                            ]
                        ]),
                        'options' => ['width' => '200'],
                    ],
                    'name',
                    [
                        'attribute' => 'html',
                        'format' => 'raw',
                        'contentOptions' => ['style' => 'white-space: normal;']
                    ],
                    [
                        'attribute' => 'status',
                        'format' => 'raw',
                        'value' => function (Reviews $data) {
                            if ($data->status) {
                                return Html::a('<span class="glyphicon glyphicon-ok"></span> Отображать', ['status', 'id' => $data->id], ['class' => 'btn btn-success btn-raised']);
                            } else {
                                return Html::a('<span class="glyphicon glyphicon-remove"></span> Скрывать', ['status', 'id' => $data->id], ['class' => 'btn btn-danger btn-raised']);
                            }
                        },
                        'filter' => Html::activeDropDownList(
                            $searchModel,
                            'status',
                            ['0' => 'Скрывать', '1' => 'Отображать'],
                            ['class' => 'form-control', 'prompt' => 'Все']
                        ),
                        'options' => ['style' => 'width: 100px; max-width: 100px;'],
                    ],

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>
