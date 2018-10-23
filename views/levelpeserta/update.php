<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LevelPeserta */

$this->title = 'Update Level Peserta: ' . $model->idLevelPeserta;
$this->params['breadcrumbs'][] = ['label' => 'Level Pesertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idLevelPeserta, 'url' => ['view', 'id' => $model->idLevelPeserta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-info">
    <div class="box-body">
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</div>