<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Akademi;

/* @var $this yii\web\View */
/* @var $model app\models\Sekolah */
/* @var $form yii\widgets\ActiveForm */
$map = ArrayHelper::map(Akademi::find()->all(),'idAkademi','namaAkademi');
?>

<div class="sekolah-form">

    <?php $form = ActiveForm::begin(['id'=>'form']); ?>

    <?= $form->field($model, 'idAkademi')->dropDownList($map) ?>

    <?= $form->field($model, 'kodeSekolah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaSekolah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
