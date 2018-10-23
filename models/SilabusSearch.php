<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Silabus;

/**
 * SilabusSearch represents the model behind the search form about `app\models\Silabus`.
 */
class SilabusSearch extends Silabus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSilabus', 'durasi_pelatihan'], 'integer'],
            [['kode_silabus', 'nama_pelatihan', 'tujuan_pelatihan', 'materi_pelatihan'], 'safe'],
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
        $query = Silabus::find();

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
            'idSilabus' => $this->idSilabus,
            'durasi_pelatihan' => $this->durasi_pelatihan,
        ]);

        $query->andFilterWhere(['like', 'kode_silabus', $this->kode_silabus])
            ->andFilterWhere(['like', 'nama_pelatihan', $this->nama_pelatihan])
            ->andFilterWhere(['like', 'tujuan_pelatihan', $this->tujuan_pelatihan])
            ->andFilterWhere(['like', 'materi_pelatihan', $this->materi_pelatihan]);

        return $dataProvider;
    }
}
