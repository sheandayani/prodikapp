<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LevelKelasJabatanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="level-kelas-jabatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idLevelKelasJabatan') ?>

    <?= $form->field($model, 'idLevelPeserta') ?>

    <?= $form->field($model, 'kelasJabatan') ?>

    <?= $form->field($model, 'namaLevelKelasJabatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
