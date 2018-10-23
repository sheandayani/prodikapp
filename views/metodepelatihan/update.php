<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MetodePelatihan */

$this->title = 'Update Metode Pelatihan: ' . $model->idMetodePelatihan;
$this->params['breadcrumbs'][] = ['label' => 'Metode Pelatihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idMetodePelatihan, 'url' => ['view', 'id' => $model->idMetodePelatihan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-info">
    <div class="box-body">
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</div>