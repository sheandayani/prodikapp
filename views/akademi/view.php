<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Akademi */

$this->title = $model->idAkademi;
$this->params['breadcrumbs'][] = ['label' => 'Akademis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idAkademi',
            'kodeAkademi',
            'namaAkademi',
        ],
    ]) ?>

    </div>
</div>