<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sekolah".
 *
 * @property int $idSekolah
 * @property int $idAkademi
 * @property string $kodeSekolah
 * @property string $namaSekolah
 *
 * @property Akademi $akademi
 */
class Sekolah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sekolah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idAkademi', 'kodeSekolah', 'namaSekolah'], 'required'],
            [['idAkademi'], 'integer'],
            [['kodeSekolah'], 'string', 'max' => 50],
            [['namaSekolah'], 'string', 'max' => 100],
            [['idAkademi'], 'exist', 'skipOnError' => true, 'targetClass' => Akademi::className(), 'targetAttribute' => ['idAkademi' => 'idAkademi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idSekolah' => 'Id Sekolah',
            'idAkademi' => 'Id Akademi',
            'kodeSekolah' => 'Kode Sekolah',
            'namaSekolah' => 'Nama Sekolah',
            'kodeakademi' => 'Kode Akademi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAkademi()
    {
        return $this->hasOne(Akademi::className(), ['idAkademi' => 'idAkademi']);
    }
}
