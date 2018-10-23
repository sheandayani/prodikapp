<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\LevelPeserta;

/* @var $this yii\web\View */
/* @var $model app\models\LevelKelasJabatan */
/* @var $form yii\widgets\ActiveForm */
$map = ArrayHelper::map(LevelPeserta::find()->all(),'idLevelPeserta','namaLevelPeserta');
?>

<div class="level-kelas-jabatan-form">

    <?php $form = ActiveForm::begin(['id'=>'form']); ?>

    <?= $form->field($model, 'idLevelPeserta')->dropDownList($map) ?>

    <?= $form->field($model, 'kelasJabatan')->dropDownList([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,0]) ?>

    <?= $form->field($model, 'namaLevelKelasJabatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
