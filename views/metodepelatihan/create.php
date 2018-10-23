<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MetodePelatihan */

$this->title = 'Create Metode Pelatihan';
$this->params['breadcrumbs'][] = ['label' => 'Metode Pelatihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</div>