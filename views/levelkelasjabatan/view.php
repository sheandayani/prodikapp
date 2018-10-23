<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LevelKelasJabatan */

$this->title = $model->idLevelKelasJabatan;
$this->params['breadcrumbs'][] = ['label' => 'Level Kelas Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'idLevelKelasJabatan',
            'levelpeserta.namaLevelPeserta',
            'kelasJabatan',
            'namaLevelKelasJabatan',
        ],
    ]) ?>

    </div>
</div>