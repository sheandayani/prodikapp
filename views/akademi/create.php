<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Akademi */

$this->title = 'Create Akademi';
$this->params['breadcrumbs'][] = ['label' => 'Akademis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</div>