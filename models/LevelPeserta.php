<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "levelPeserta".
 *
 * @property int $idLevelPeserta
 * @property string $namaLevelPeserta
 *
 * @property LevelKelasJabatan[] $levelKelasJabatans
 */
class LevelPeserta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'levelPeserta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namaLevelPeserta'], 'required'],
            [['namaLevelPeserta'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idLevelPeserta' => 'Id Level Peserta',
            'namaLevelPeserta' => 'Nama Level Peserta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLevelkelasjabatan()
    {
        return $this->hasMany(LevelKelasJabatan::className(), ['idLevelPeserta' => 'idLevelPeserta']);
    }
}
