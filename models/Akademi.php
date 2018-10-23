<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "akademi".
 *
 * @property int $idAkademi
 * @property string $kodeAkademi
 * @property string $namaAkademi
 *
 * @property Sekolah[] $sekolahs
 */
class Akademi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akademi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kodeAkademi', 'namaAkademi'], 'required'],
            [['kodeAkademi'], 'string', 'max' => 50],
            [['namaAkademi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAkademi' => 'Id Akademi',
            'kodeAkademi' => 'Kode Akademi',
            'namaAkademi' => 'Nama Akademi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSekolahs()
    {
        return $this->hasMany(Sekolah::className(), ['idAkademi' => 'idAkademi']);
    }
}
