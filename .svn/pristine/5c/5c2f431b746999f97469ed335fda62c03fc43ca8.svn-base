<?php
use yii\widgets\Pjax;
use kartik\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;
//use \app\models\FollowUp;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MaternalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = '';
//$this->params['breadcrumbs'][] = $this->title;
?>
   <div class="personnel-index">
<?php Pjax::begin(); ?>
    <?php echo GridView::widget([
     'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>"{sorter}\n{pager}\n{summary}\n{items}",
        'showPageSummary'=>false,
'panel'=>[
  'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-circle-arrow-right"></i> Personnel Lists</h3>',
 'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i>Create Personnel', ['create'], ['class' => 'btn btn-success','style'=>"float:right"]),//'onClick'=>"popup()"]),
        'type'=>'success',
         ],

        'bootstrap' =>true,
        'hover'=>true,
      'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
    'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    'filterRowOptions'=>['class'=>'kartik-sheet-style'],
          'pjax'=>true,
        'emptyCell'=>'-',
        'tableOptions'=>['class'=>'table table-hover table-striped table-responsive table-condensed'],
       
    'toolbar'=> [ 
            '{export}',
            '{toggleData}',
            ],
      'toggleDataContainer'=>['class'=>'btn-group mr-2'],
    // set export properties
    'export'=>[
        'fontAwesome'=>true
    ],
      'persistResize'=>false,
    'toggleDataOptions'=>['minCount'=>10],
    'itemLabelSingle'=>'Personnel',
    'itemLabelPlural'=>'Personnel',
        'columns'=>[
            ['header'=>'Seq','class'=>'yii\grid\SerialColumn'],
           // 'PERSONNELGROUP_ID',
            'firstname',
            'lastname',
            'personnelid',
            //'EMAILADDRESS:email',
            //'WORKPHONENUMBER',
            //'HOMEPHONENUMBER',
            //'MOBILEPHONENUMBER',
            //'JOBTITLE_ID',
            //'PAGERNUMBER',
            //'AUTOBARCODE',
            //'JOBTITLE',
            //'PERSONNELGROUP',
            //'DISPLAYNAMEANDNUMBER',
            //'DATECREATED',
            //'DATEUPDATED',
            //'STATUS_ID',
['format'=>'raw',
 'header'=>'Action',
 'headerOptions'=>['class'=>'kartik-sheet-style'],
 'value'=>function($data){
      return Html::a('View',['view','id'=>$data->id],['class'=>'btn btn-xs btn-sucess glyphicon glyphicon-ok']).Html::a('Edit',['update','id'=>$data->id],['class'=>'btn btn-xs btn-sucess glyphicon glyphicon-edit']);
  },],
       /*[
              'format'=>'raw',
               'header'=>'Pullout',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
              'value'=>function($data){
           $id=$data->id;                
return Html::a('Pullout', ['delete', 'id' =>$id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]);         
            },
         ],*/
        ],
       
    ]); 
     ?>
 <?php Pjax::end();?>
</div>
<script type="text/javascript">          
    $(document).ready(function(){
        console.log('Js is ready');
    });
   function popup(){
       $("#personnelid").val();
       $("#consentModal").modal('show');
    }    
   