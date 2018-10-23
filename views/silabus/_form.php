<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Silabus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="silabus-form">

    <?php $form = ActiveForm::begin(['id'=>'form']); ?>

    <?= $form->field($model, 'kode_silabus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pelatihan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tujuan_pelatihan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'materi_pelatihan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'durasi_pelatihan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
