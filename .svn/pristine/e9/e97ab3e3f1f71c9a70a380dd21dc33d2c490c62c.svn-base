<?php
use miloschuman\highcharts\Highcharts;
use app\models\Withdrow;
?>
<div style="margin-top: -3%;">
<?php echo "<h4>"."Graphical Summary report"."</h4>";?>
</div>
<div class="graphical report">
    <div class="row">
    <div class="col-lg-12">
<?php
/*
<?=Highcharts::widget([
    'options'=>[
        'colors'=>['#FAEBD7','#50B432','#DC143C','#8A2BE2','#000000','#483D8B',
                  '#ADFF2F','#ADD8E6','#7B68EE','#4682B4','#FFFF00','#EE82EE'],
        "title"=>[
            "text"=>'Stocks consumption graphical report for each unit/'.(intval(date('Y')) - 1),
        ],
        "subtitle"=>[
            "text"=>'This report details all transfer stock started'
        ],
        "xAxis"=>[
             "categories"=>[
            '<b>'.$monthlyreport['champ1'].' '.$yearlyreport,
             '<b>'.$monthlyreport['champ2'].' '.$yearlyreport,
             '<b>'.$monthlyreport['champ3'].' '.$yearlyreport,
             '<b>'.$monthlyreport['champ4'].' '.$yearlyreport,
             '<b>'.$monthlyreport['champ5'].' '.$yearlyreport,
             '<b>'.$monthlyreport['champ6'].' '.$yearlyreport,
             '<b>'.$monthlyreport['champ7'].' '.$yearlyreport,
             '<b>'.$monthlyreport['champ8'].' '.$yearlyreport,
             '<b>'.$monthlyreport['champ9'].' '.$yearlyreport,
             '<b>'.$monthlyreport['champ10'].' '.$yearlyreport,
             '<b>'.$monthlyreport['champ11'].' '.$yearlyreport,
             '<b>'.$monthlyreport['champ12'].' '.$yearlyreport
        ],],
        "series"=>[[
            "type"=>'column',
            "colorByPoint"=>true,//this used to set different color ofr each bar
            "data"=>[
                (int)$data['champ1'],
                (int)$data['champ2'],
                (int)$data['champ3'],
                (int)$data['champ4'],
                (int)$data['champ5'],
                (int)$data['champ6'],
                (int)$data['champ7'],
                (int)$data['champ8'],
                (int)$data['champ9'],
                (int)$data['champ10'],
                (int)$data['champ11'],
                (int)$data['champ12']],
            //"showInLegend"=>true,
            "legend"=>[ // Enable and configure the legend
                "enabled"=>true,
                "layout"=>'vertical',
                "align"=>'right',
                "verticalAlign"=>'middle'
            ],
            "dataLabels"=>[
                    "enabled"=>true,
                    "format"=>'{y}', // format of the label
                    "align"=>'center',
                    "verticalAlign"=>'top',
                    "y"=>-15//adjust this value to move the label up or down
            ],
        ]],
        'credits'=>['enabled'=>true],
    ]
]);?>
*/?>
<?php
/*$monthlyreport=[];
for ($i=1; $i<=12;$i++){
    $monthlyreport["champ".$i]=date('M',strtotime((intval(date('Y'))-1).'-'.$i.'-01'));
}*/
$monthlyreport=[];
$Withdrow=Withdrow::find()->where(['yearlyreport'=>date('Y')-1])->all();
for ($i=1;$i<=12; $i++) {
    $monthlyreport["champ".$i]=[
        'month'=>date('M',strtotime((intval(date('Y'))-1).'-'.$i.'-01')),
        'withdrow'=>Withdrow::find()->where(['monthlyreport'=>$i,'yearlyreport'=>date('Y') - 1])->sum('quantity')
    ];
}
?>
?>
<?=Highcharts::widget([
                'options'=>[
                    'colors'=>['#FAEBD7', '#50B432', '#DC143C', '#8A2BE2', '#000000', '#483D8B',
                        '#ADFF2F', '#ADD8E6', '#7B68EE', '#4682B4', '#FFFF00', '#EE82EE'],
                    "title"=>[
                        "text"=>'Stocks consumption graphical report for each unit/' . (intval(date('Y')) - 1),
                    ],
                    "subtitle"=>[
                        "text"=>'This report details all transfer stock started'
                    ],
                    "xAxis"=>[
                        "categories"=>[
                            '<b>'.$monthlyreport['champ1']['month'].' '.(intval(date('Y')) - 1),
                            '<b>'.$monthlyreport['champ2']['month'].' '.(intval(date('Y')) - 1),
                            '<b>'.$monthlyreport['champ3']['month'].' '.(intval(date('Y')) - 1),
                            '<b>'.$monthlyreport['champ4']['month'].' '.(intval(date('Y')) - 1),
                            '<b>'.$monthlyreport['champ5']['month'].' '.(intval(date('Y')) - 1),
                            '<b>'.$monthlyreport['champ6']['month'].' '.(intval(date('Y')) - 1),
                            '<b>'.$monthlyreport['champ7']['month'].' '.(intval(date('Y')) - 1),
                            '<b>'.$monthlyreport['champ8']['month'].' '.(intval(date('Y')) - 1),
                            '<b>'.$monthlyreport['champ9']['month'].' '.(intval(date('Y')) - 1),
                            '<b>'.$monthlyreport['champ10']['month'].' '.(intval(date('Y')) - 1),
                            '<b>'.$monthlyreport['champ11']['month'].' '.(intval(date('Y')) - 1),
                            '<b>'.$monthlyreport['champ12']['month'].' '.(intval(date('Y')) - 1)
                        ],
                    ],
                    "series"=>[[
                        "type"=>'column',
                        "colorByPoint"=>true, //this used to set different color for each bar
                        "data" => [
                            (int) $data['champ1']['withdrow'],
                            (int) $data['champ2']['withdrow'],
                            (int) $data['champ3']['withdrow'],
                            (int) $data['champ4']['withdrow'],
                            (int) $data['champ5']['withdrow'],
                            (int) $data['champ6']['withdrow'],
                            (int) $data['champ7']['withdrow'],
                            (int) $data['champ8']['withdrow'],
                            (int) $data['champ9']['withdrow'],
                            (int) $data['champ10']['withdrow'],
                            (int) $data['champ11']['withdrow'],
                            (int) $data['champ12']['withdrow']
                        ],
                        //"showInLegend"=>true,
                        "legend"=>[ // Enable and configure the legend
                            "enabled"=>true,
                            "layout"=>'vertical',
                            "align"=>'right',
                            "verticalAlign"=>'middle'
                        ],
                        "dataLabels"=>[
                            "enabled"=>true,
                            "format"=>'{y}', // format of the label
                            "align"=>'center',
                            "verticalAlign"=>'top',
                            "y"=>-15 //adjust this value to move the label up or down
                        ]
                    ]],
                    'credits'=>['enabled'=>true],
                ]
            ]);
            ?>
</div>
</div>
</div>

