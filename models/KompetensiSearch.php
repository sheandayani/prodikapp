<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kompetensi;

/**
 * KompetensiSearch represents the model behind the search form about `app\models\Kompetensi`.
 */
class KompetensiSearch extends Kompetensi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'kodeKelompok', 'kelompok_kompetensi', 'label_kompetensi'], 'safe'],
            [['no', 'hal'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kompetensi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'no' => $this->no,
            'hal' => $this->hal,
        ]);

        $query->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'kodeKelompok', $this->kodeKelompok])
            ->andFilterWhere(['like', 'kelompok_kompetensi', $this->kelompok_kompetensi])
            ->andFilterWhere(['like', 'label_kompetensi', $this->label_kompetensi]);

        return $dataProvider;
    }
}
