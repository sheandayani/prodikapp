<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "level".
 *
 * @property int $idLevel
 * @property string $levelNama
 * @property string $indikatorPerilaku
 * @property string $kataKunci
 */
class Level extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'level';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['levelNama', 'indikatorPerilaku', 'kataKunci'], 'required'],
            [['indikatorPerilaku', 'kataKunci'], 'string'],
            [['levelNama'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idLevel' => 'Id Level',
            'levelNama' => 'Level Nama',
            'indikatorPerilaku' => 'Indikator Perilaku',
            'kataKunci' => 'Kata Kunci',
        ];
    }
}
