<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MetodePelatihan */

$this->title = $model->idMetodePelatihan;
$this->params['breadcrumbs'][] = ['label' => 'Metode Pelatihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idMetodePelatihan',
            'namaMetodePelatihan',
        ],
    ]) ?>

    </div>
</div>