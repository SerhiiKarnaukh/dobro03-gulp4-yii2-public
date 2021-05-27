<?php

namespace common\entities;


use \yii\db\ActiveRecord;
use backend\components\SortableBehavior;

/**
 * This is the model class for table "{{%prices}}".
 *
 * @property int $id
 * @property string $service
 * @property string $price
 * @property int $sort
 * @property int $status
 */
class Prices extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%prices}}';
    }
    public function behaviors()
    {
        return [
            [
                'class' => SortableBehavior::class,
            ],
        ];
    }

    public function rules()
    {
        return array_filter([
            [['service', 'price'], 'required'],
            [['service'], 'string'],
            [['sort', 'status'], 'integer'],
            [['price'], 'string', 'max' => 255],
        ]);
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service' => 'Услуга',
            'price' => 'Цена',
            'sort' => 'Порядок',
            'status' => 'Статус',
        ];
    }
}
