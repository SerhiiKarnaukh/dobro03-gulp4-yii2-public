<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $model \frontend\forms\ConsultationForm */
?>
<div class="ajaxContent">
    <?php $form = ActiveForm::begin(['id' => 'consultationFormId', 'action' => '/site/consultation']); ?>
    <?= $form->field($model, 'name')->textInput(['placeholder' => "Имя"])->label(false) ?>
    <?= $form->field($model, 'phone')->widget(MaskedInput::className(), [
        'mask' => '+7 (999) 999-99-99',
        'options' => ['placeholder' => "Телефон"]
    ])->label(false) ?>
    <?= $form->field($model, 'message')->textarea(['rows' => 2]); ?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-danger']);?>
    <?php ActiveForm::end(); ?>
</div>

