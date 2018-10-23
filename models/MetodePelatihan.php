<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "metodePelatihan".
 *
 * @property int $idMetodePelatihan
 * @property string $namaMetodePelatihan
 */
class MetodePelatihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metodePelatihan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namaMetodePelatihan'], 'required'],
            [['namaMetodePelatihan'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idMetodePelatihan' => 'Id Metode Pelatihan',
            'namaMetodePelatihan' => 'Nama Metode Pelatihan',
        ];
    }
}
