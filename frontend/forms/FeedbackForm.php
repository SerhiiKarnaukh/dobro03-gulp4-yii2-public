<?php

namespace frontend\forms;

use common\entities\Reviews;
use Yii;
use yii\base\Model;
use yii\helpers\Html;

class FeedbackForm extends Model
{
    public $message;
    public $name;

    public function rules()
    {
        return array_filter([
            [['message', 'name'], 'required'],
            [['message'], 'string'],
            ['name', 'match', 'pattern' => '/^[А-Яа-яa-zA-ZЁё ]{2,255}$/u', 'message' => '{attribute} может содержать только буквы и пробел'],
        ]);
    }

    public function attributeLabels()
    {
        return [
            'message' => Yii::t('app', 'Отзыв'),
            'name' => Yii::t('app', 'Имя'),
        ];
    }

    public function create()
    {
        $model = new Reviews();
        $model->name = $this->name;
        $model->html = $this->message;
        return $model->save();
    }

    public function sendEmail()
    {
        return Yii::$app->mailer->compose()
            ->setTo(Yii::$app->params['adminEmail'])
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name])
            ->setSubject('feedback form ERAI')
            ->setTextBody(Html::encode($this->message))
            ->send();
    }
}