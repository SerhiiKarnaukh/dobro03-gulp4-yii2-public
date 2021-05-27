<?php

namespace common\entities;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%reviews}}".
 *
 * @property int $id
 * @property string $html
 * @property string $name
 * @property int $created_at
 * @property int $status
 */
class Reviews extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%reviews}}';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'updatedAtAttribute' => null,
            ]
        ];

    }

    public function rules()
    {
        return array_filter([
            [['html', 'name'], 'required'],
            [['html'], 'string'],
            [['created_at', 'status'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ]);
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'html' => 'Отзыв',
            'name' => 'Имя',
            'created_at' => 'Добавлен',
            'status' => 'Статус',
        ];
    }
}
