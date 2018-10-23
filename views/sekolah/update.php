<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sekolah */

$this->title = 'Update Sekolah: ' . $model->idSekolah;
$this->params['breadcrumbs'][] = ['label' => 'Sekolahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idSekolah, 'url' => ['view', 'id' => $model->idSekolah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-info">
    <div class="box-body">
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</div>