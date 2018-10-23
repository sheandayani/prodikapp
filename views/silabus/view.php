<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Silabus */

$this->title = $model->idSilabus;
$this->params['breadcrumbs'][] = ['label' => 'Silabuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idSilabus',
            'kode_silabus',
            'nama_pelatihan',
            'tujuan_pelatihan:ntext',
            'materi_pelatihan:ntext',
            'durasi_pelatihan',
        ],
    ]) ?>

    </div>
</div>