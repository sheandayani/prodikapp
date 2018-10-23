<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Level */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="level-form">

    <?php $form = ActiveForm::begin(['id'=>'form']); ?>

    <?= $form->field($model, 'levelNama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indikatorPerilaku')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kataKunci')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
