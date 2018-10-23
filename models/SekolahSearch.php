<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sekolah;

/**
 * SekolahSearch represents the model behind the search form about `app\models\Sekolah`.
 */
class SekolahSearch extends Sekolah
{
    /**
     * @inheritdoc
     */
    public $akademi;
    public $kodeakademi;

    public function rules()
    {
        return [
            [['idSekolah', 'idAkademi'], 'integer'],
            [['kodeSekolah', 'namaSekolah','akademi','kodeakademi'], 'safe'],
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
        $query = Sekolah::find();

        $query->joinWith(['akademi']);
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['akademi'] = [
            // The tables are the ones our relation are configured to
            // in my case they are prefixed with "tbl_"
            'asc' => ['akademi.namaAkademi' => SORT_ASC],
            'desc' => ['akademi.namaAkademi' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['kodeakademi'] = [
            // The tables are the ones our relation are configured to
            // in my case they are prefixed with "tbl_"
            'asc' => ['akademi.kodeAkademi' => SORT_ASC],
            'desc' => ['akademi.kodeAkademi' => SORT_DESC],
        ];

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idSekolah' => $this->idSekolah,
            'idAkademi' => $this->idAkademi,
        ]);

        $query->andFilterWhere(['like', 'kodeSekolah', $this->kodeSekolah])
            ->andFilterWhere(['like', 'namaSekolah', $this->namaSekolah])
            ->andFilterWhere(['like', 'akademi.namaAkademi', $this->akademi])
            ->andFilterWhere(['like', 'akademi.kodeAkademi', $this->kodeakademi]);

        return $dataProvider;
    }
}
