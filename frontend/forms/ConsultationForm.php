<?php

namespace frontend\forms;

use Yii;
use yii\base\Model;

class ConsultationForm extends Model
{
    public $name;
    public $phone;
    public $message;

    public function rules()
    {
        return array_filter([
            [['message', 'name', 'phone'], 'required'],
            [['message', 'name', 'phone'], 'string'],
            [['name', 'phone'], 'string', 'max' => 100],
            ['name', 'match', 'pattern' => '/^[А-Яа-яa-zA-ZЁё ]{2,255}$/u', 'message' => '{attribute} может содержать только буквы и пробел'],
        ]);
    }

    public function attributeLabels()
    {
        return [
            'message' => Yii::t('app', 'Сообщение'),
            'name' => Yii::t('app', 'Имя'),
            'phone' => Yii::t('app', 'Телефон'),
        ];
    }

    private $html;

    public function sendEmail()
    {
        $this->html .= "<style>";
        $this->html .= ".h2{ font-size:2em; font-weight:lighter; text-transform:uppercase;}";
        $this->html .= "</style>";
        $this->html .= "<table>";
        $this->html .= "<tr><td colspan='2' class='form-heading' ><h2>Гражданин</h2></td><td></td></tr>";
        $this->html .= "<tr><td>Имя</td><td>: {$this->name}</td></tr>";
        $this->html .= "<tr><td>Телефон</td><td>: {$this->phone}</td></tr>";
        $this->html .= "<tr><td>Сообщение</td><td>: {$this->message}</td></tr>";
        $this->html .= "</table>";


        return Yii::$app->mailer->compose()
            ->setTo(Yii::$app->params['adminEmail'])
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name])
            ->setSubject('Заказ консультации')
            ->setHtmlBody($this->html)
            ->send();
    }

}