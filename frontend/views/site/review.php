<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $model \frontend\forms\ConsultationForm */
?>
<div class="ajaxContent">
    <h2></h2>
    <?php $form = ActiveForm::begin(['id' => 'reviewFormId']); ?>

    <?= $form->field($model, 'name')->textInput(); ?>
    <?= $form->field($model, 'message')->textarea(['rows' => 2]); ?>

    <?= Html::submitButton('Отправить', ['class' => 'btn btn-danger']);?>

    <?php ActiveForm::end(); ?>
</div>

