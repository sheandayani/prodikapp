
<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MetodePelatihanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Metode Pelatihan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-danger">
    <div class="box-body">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        
            <p>
                <?= Html::button('<i class=\\\"fa fa-plus\\\"></i> Create Metode Pelatihan', ['class' => 'btn btn-success input-data btn-sm','value'=>Url::to(['create'])]) ?>
            </p>
                            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'condensed' => true,
                'bordered' => false,
                'hover' => true,
                'striped' => true,
                'responsive' => false,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'idMetodePelatihan',
                    'namaMetodePelatihan',

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update} {delete}',
                        'headerOptions' => ['style' => 'width:100px;'],
                        'buttons' => [
                            'view' => function($url,$model,$key){
                                $url = Url::to(['view','id'=>$model->idMetodePelatihan]);
                                $link = Html::button('<span class="glyphicon glyphicon-eye-open"></span>',['class'=>'btn btn-xs btn-success viewButton','value'=>$url,'title'=>'View']);
                                return $link;
                            },
                            'update' => function($url,$model,$key){
                                $url = Url::to(['update','id'=>$model->idMetodePelatihan]);
                                $link = Html::button('<span class="glyphicon glyphicon-pencil"></span>',['class'=>'btn btn-xs btn-warning updateButton','value'=>$url,'title'=>'Edit']);
                                return $link;
                            },
                            'delete' => function($url,$model,$key){
                                $link = Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->idMetodePelatihan], [
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete',
                                    'data' => [
                                        'confirm' => 'Sure?',
                                        'method' => 'post',
                                    ],
                                ]);
                                return $link;
                            }
                        ],
                    ],
                ],
            ]); ?>
                    </div>

</div>
