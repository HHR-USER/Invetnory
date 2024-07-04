<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\select2\Select2;
use\app\models\Withdrow;
$this->params['breadcrumbs'][]=$this->title;
error_reporting(1);
?>
<div class="withdrow-index">
<?php Pjax::begin(); ?>
<?php echo GridView::widget([
    'dataProvider'=>$dataProvider,
    'filterModel'=>$searchModel,
    'showPageSummary'=>true,
    'pjax'=>true,
    'striped'=>true,
    'hover'=>true,
    'panel'=>[//'type' => 'info',
     'heading'=>'Consumables currently availabel in CHAMPS Main Store'],
    'toggleDataContainer'=>['class'=>'btn-group mr-2'],
    'columns'=>[
    ['header'=>'Seq','class'=>'yii\grid\SerialColumn'],
    [
        'attribute'=>'noi', 
        'format'=>'raw',
        'value'=>function($model){ 
            $count=Withdrow::find()->where(['noi'=>$model->noi])->count();
           return Html::a($model->noi,['noi'=>$model->noi]);
         },
        'filterType'=>GridView::FILTER_SELECT2,
        'filter'=>ArrayHelper::map(Withdrow::find()->asArray()->all(), 'noi', 'noi'), 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'Any item'],
     ],
            [
                'attribute'=>'monthlyreport', 
                'format'=>'raw',
                'value'=>function($model){ 
                    $count=Withdrow::find()->where(['monthlyreport'=>$model->monthlyreport])->count();
                   return Html::a($model->monthlyreport,['monthlyreport'=>$model->monthlyreport]);
                 },
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>ArrayHelper::map(Withdrow::find()->asArray()->all(), 'monthlyreport', 'monthlyreport'), 
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],],
            [
                'attribute'=>'yearlyreport', 
                'format'=>'raw',
                'value'=>function($model){ 
                    $count=Withdrow::find()->where(['yearlyreport'=>$model->yearlyreport])->count();
                   return Html::a($model->yearlyreport,['yearlyreport'=>$model->yearlyreport],['class'=>'link-class']);
                 },
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>ArrayHelper::map(Withdrow::find()->asArray()->all(), 'yearlyreport', 'yearlyreport'), 
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'Any Year'],
             ],
             [
                'attribute'=>'office', 
                'format'=>'raw',
                'value'=>function($model){ 
                    $count=Withdrow::find()->where(['office'=>$model->office])->count();
                   return Html::a($model->office,['office'=>$model->office],['class'=>'link-class']);
                 },
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>ArrayHelper::map(Withdrow::find()->asArray()->all(), 'office', 'office'), 
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'Any Unit'],
             ],
            [
                'attribute'=>'quantity',
                'width'=>'150px',
                'hAlign'=>'right',
                'format'=>['decimal',0],
                'pageSummary'=>true
            ], 
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
