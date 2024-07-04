<?php
use miloschuman\highcharts\Highcharts;
?>
<div style="margin-top: -3%;">
<?php echo "<h4>"."Graphical Summary report"."</h4>";?>
</div>
<div class="graphical report">
    <div class="row">
        <div class="col-lg-12">
    <?= Highcharts::widget([
            
            'options' => [
    'colors'=> ['#50B432','blue'],
               "title" => [
                "text" => 'Stocks transfer report from one to the other'." ".'by'."  "."<span style='color:red'>".Yii::$app->user->identity->fname.' '.Yii::$app->user->identity->mname."</span>",
            ],
            "subtitle"=>[
                "text"=>'current year monthly report'
            ],
            "xAxis" => [
                 "categories" => ['<b>'." ".date('M',strtotime("+3 month")),''.'<b>'." ".date('M',strtotime("+4 month")),''.'<b>'." ".date('M',strtotime("+5 month")),''.'<b>'." ".date('M',strtotime("+6 month")),''.'<b>'." ".date('M',strtotime("+7 month")),''.'<b>'." ".date('M',strtotime("+8 month")),''.'<b>'." ".date('M',strtotime("+9 month")),''.'<b>'." ".date('M',strtotime("+10 month")),''.'<b>'." ".date('M',strtotime("+11 month")),'<b>'." ".date('M'),''.'<b>'." ".date('M',strtotime("+1 month")),''.'<b>'." ".date('M',strtotime("+2 month"))],
            ],
            "series" => [[
                "type"=> 'column',
                "colorByPoint" => true,
                "data"=>[(int)$data['champ4'],(int)$data['champ5'],(int)$data['champ6'],(int)$data['champ7'],(int)$data['champ8'],(int)$data['champ9'],(int)$data['champ10'],(int)$data['champ11'],(int)$data['champ1'],(int)$data['assets'],(int)$data['champ2'],(int)$data['champ3'],],
                "showInLegend" => false
            ]],
                'credits' => ['enabled' => true],
            ]
]);?>
        </div>
             <div class="col-lg-12">
              <?= Highcharts::widget([
            
            'options' => [
                'colors'=> ['#50B432','blue'],
        
               "title" => [
                "text" => 'The following gragh show total order stocks',
            ],

            "subtitle" => [
                "text" => 'Report'
            ],
        "xAxis"=>[
                 "categories"=>['<b>'.date('M',strtotime("+3 month")),'<b>'.date('M',strtotime("+4 month")),'<b>'.date('M',strtotime("+5 month")),'<b>'.date('M',strtotime("+6 month")),'<b>'.date('M',strtotime("+7 month")),'<b>'.date('M',strtotime("+8 month")),'<b>'.date('M',strtotime("+9 month")),'<b>'.date('M',strtotime("+10 month")),'<b>'.date('M',strtotime("+11 month")),'<b>'.date('M'),'<b>'.date('M',strtotime("+1 month")),'<b>'.date('M',strtotime("+2 month")),]
            ],
   "series" => [[
                "type"=> 'column',
                "colorByPoint" =>true,
            "data" => [(int)$data['orderitem4'],(int)$data['orderitem5'],(int)$data['orderitem6'],(int)$data['orderitem7'],(int)$data['orderitem8'],(int)$data['orderitem9'],(int)$data['orderitem10'],(int)$data['orderitem11'],(int)$data['orderitem'],(int)$data['orderitem1'],(int)$data['orderitem2'],(int)$data['orderitem3'],],
                "showInLegend" => false
            ]],
                'credits' => ['enabled' => false],
            ]
]);?>
        </div>
        </div>
        </div>