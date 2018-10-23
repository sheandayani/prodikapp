<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kompetensi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kompetensi-form">

    <?php $form = ActiveForm::begin(['id'=>'form']); ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no')->textInput() ?>

    <?= $form->field($model, 'kodeKelompok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelompok_kompetensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'label_kompetensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
