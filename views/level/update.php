<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Level */

$this->title = 'Update Level: ' . $model->idLevel;
$this->params['breadcrumbs'][] = ['label' => 'Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idLevel, 'url' => ['view', 'id' => $model->idLevel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="box box-info">
    <div class="box-body">
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</div>