<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KompetensiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kompetensi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'no') ?>

    <?= $form->field($model, 'kodeKelompok') ?>

    <?= $form->field($model, 'kelompok_kompetensi') ?>

    <?= $form->field($model, 'label_kompetensi') ?>

    <?php // echo $form->field($model, 'hal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
