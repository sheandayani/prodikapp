<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Silabus */

$this->title = 'Create Silabus';
$this->params['breadcrumbs'][] = ['label' => 'Silabuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

	</div>
</div>