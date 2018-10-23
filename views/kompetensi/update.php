<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kompetensi */

$this->title = 'Update Kompetensi: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Kompetensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'id' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-info">
    <div class="box-body">
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</div>