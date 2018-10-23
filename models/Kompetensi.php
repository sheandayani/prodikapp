<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kompetensi".
 *
 * @property string $kode
 * @property int $no
 * @property string $kodeKelompok
 * @property string $kelompok_kompetensi
 * @property string $label_kompetensi
 * @property int $hal
 */
class Kompetensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kompetensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['no', 'hal'], 'integer'],
            [['kode'], 'string', 'max' => 7],
            [['kodeKelompok'], 'string', 'max' => 6],
            [['kelompok_kompetensi'], 'string', 'max' => 41],
            [['label_kompetensi'], 'string', 'max' => 62],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'no' => 'No',
            'kodeKelompok' => 'Kode Kelompok',
            'kelompok_kompetensi' => 'Kelompok Kompetensi',
            'label_kompetensi' => 'Label Kompetensi',
            'hal' => 'Hal',
        ];
    }
}
