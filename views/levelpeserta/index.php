
<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LevelPesertaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Level Peserta';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-danger">
    <div class="box-body">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        
            <p>
                <?= Html::button('<i class=\\\"fa fa-plus\\\"></i> Create Level Peserta', ['class' => 'btn btn-success input-data btn-sm','value'=>Url::to(['create'])]) ?>
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

                    // 'idLevelPeserta',
            'namaLevelPeserta',

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update} {delete}',
                        'headerOptions' => ['style' => 'width:100px;'],
                        'buttons' => [
                            'view' => function($url,$model,$key){
                                $url = Url::to(['view','id'=>$model->idLevelPeserta]);
                                $link = Html::button('<span class="glyphicon glyphicon-eye-open"></span>',['class'=>'btn btn-xs btn-success viewButton','value'=>$url,'title'=>'View']);
                                return $link;
                            },
                            'update' => function($url,$model,$key){
                                $url = Url::to(['update','id'=>$model->idLevelPeserta]);
                                $link = Html::button('<span class="glyphicon glyphicon-pencil"></span>',['class'=>'btn btn-xs btn-warning updateButton','value'=>$url,'title'=>'Edit']);
                                return $link;
                            },
                            'delete' => function($url,$model,$key){
                                $link = Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->idLevelPeserta], [
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete',
                                    'data' => [
                                        'confirm' => 'Yakin mau hapus ini?',
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
