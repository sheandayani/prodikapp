<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Akademi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akademi-form">

    <?php $form = ActiveForm::begin(['id'=>'form']); ?>

    <?= $form->field($model, 'kodeAkademi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaAkademi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
