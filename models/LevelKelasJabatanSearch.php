<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LevelKelasJabatan;

/**
 * LevelKelasJabatanSearch represents the model behind the search form about `app\models\LevelKelasJabatan`.
 */
class LevelKelasJabatanSearch extends LevelKelasJabatan
{
    /**
     * @inheritdoc
     */

    public $levelpeserta;

    public function rules()
    {
        return [
            [['idLevelKelasJabatan', 'idLevelPeserta', 'kelasJabatan'], 'integer'],
            [['namaLevelKelasJabatan','levelpeserta'], 'safe'],
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
        $query = LevelKelasJabatan::find();
        $query->joinWith(['levelpeserta']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['levelpeserta'] = [
            // The tables are the ones our relation are configured to
            // in my case they are prefixed with "tbl_"
            'asc' => ['levelPeserta.namaLevelPeserta' => SORT_ASC],
            'desc' => ['levelPeserta.namaLevelPeserta' => SORT_DESC],
        ];

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idLevelKelasJabatan' => $this->idLevelKelasJabatan,
            'idLevelPeserta' => $this->idLevelPeserta,
            'kelasJabatan' => $this->kelasJabatan,
        ]);

        $query->andFilterWhere(['like', 'namaLevelKelasJabatan', $this->namaLevelKelasJabatan]);
        $query->andFilterWhere(['like', 'levelPeserta.namaLevelPeserta', $this->levelpeserta]);

        return $dataProvider;
    }
}
