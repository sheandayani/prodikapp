<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LevelPeserta */

$this->title = $model->idLevelPeserta;
$this->params['breadcrumbs'][] = ['label' => 'Level Pesertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idLevelPeserta',
            'namaLevelPeserta',
        ],
    ]) ?>

    </div>
</div>