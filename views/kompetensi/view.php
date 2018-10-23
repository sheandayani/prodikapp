<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kompetensi */

$this->title = $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Kompetensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode',
            'no',
            'kodeKelompok',
            'kelompok_kompetensi',
            'label_kompetensi',
            'hal',
        ],
    ]) ?>

    </div>
</div>