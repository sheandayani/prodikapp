<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LevelPeserta */

$this->title = 'Create Level Peserta';
$this->params['breadcrumbs'][] = ['label' => 'Level Pesertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</div>