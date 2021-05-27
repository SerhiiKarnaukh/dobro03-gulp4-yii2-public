<?php

namespace backend\forms;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\entities\Reviews;

class ReviewsSearch extends Model
{
    public $created_at;
    public $status;
    public $name;

    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['created_at','name'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = Reviews::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['>=', 'created_at', $this->created_at ? strtotime($this->created_at . ' 00:00:00') : null])
            ->andFilterWhere(['<=', 'created_at', $this->created_at ? strtotime($this->created_at . ' 23:59:59') : null]);

        return $dataProvider;
    }
}
