<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LevelKelasJabatan */

$this->title = 'Create Level Kelas Jabatan';
$this->params['breadcrumbs'][] = ['label' => 'Level Kelas Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</div>