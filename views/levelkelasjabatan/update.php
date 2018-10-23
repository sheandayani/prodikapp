<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LevelKelasJabatan */

$this->title = 'Update Level Kelas Jabatan: ' . $model->idLevelKelasJabatan;
$this->params['breadcrumbs'][] = ['label' => 'Level Kelas Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idLevelKelasJabatan, 'url' => ['view', 'id' => $model->idLevelKelasJabatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-info">
    <div class="box-body">
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</div>