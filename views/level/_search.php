<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LevelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="level-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idLevel') ?>

    <?= $form->field($model, 'levelNama') ?>

    <?= $form->field($model, 'indikatorPerilaku') ?>

    <?= $form->field($model, 'kataKunci') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
