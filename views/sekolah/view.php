<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sekolah */

$this->title = $model->idSekolah;
$this->params['breadcrumbs'][] = ['label' => 'Sekolahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idSekolah',
            'idAkademi',
            'kodeSekolah',
            'namaSekolah',
        ],
    ]) ?>

    </div>
</div>