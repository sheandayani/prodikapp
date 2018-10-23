<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SekolahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sekolah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idSekolah') ?>

    <?= $form->field($model, 'idAkademi') ?>

    <?= $form->field($model, 'kodeSekolah') ?>

    <?= $form->field($model, 'namaSekolah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
