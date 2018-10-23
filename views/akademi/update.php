<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Akademi */

$this->title = 'Update Akademi: ' . $model->idAkademi;
$this->params['breadcrumbs'][] = ['label' => 'Akademis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAkademi, 'url' => ['view', 'id' => $model->idAkademi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-info">
    <div class="box-body">
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</div>