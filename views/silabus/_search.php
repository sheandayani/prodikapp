<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SilabusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="silabus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idSilabus') ?>

    <?= $form->field($model, 'kode_silabus') ?>

    <?= $form->field($model, 'nama_pelatihan') ?>

    <?= $form->field($model, 'tujuan_pelatihan') ?>

    <?= $form->field($model, 'materi_pelatihan') ?>

    <?php // echo $form->field($model, 'durasi_pelatihan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
