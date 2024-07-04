<?php
use miloschuman\highcharts\Highcharts;
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                "text" => ' Stock levels in each Staff',
            ],

            "subtitle" => [
                "text" => ' Report'
            ],

            "xAxis" => [
                 "categories" => ['Total assets in main store','Total consumables in main store','Total assets in clinical','Total consumables in clinical','Total assets in microlab','Total consumable in microlab','Total assets in Pathology','Total consumables in Pathology','Total assets in IT','To assets in SBS','Total consumables in IT','Total consumables in SBS']
            ],
            "series" => [[
                "type"=> 'column',
                "colorByPoint" => true,
                "data" => [(int)$data['assets'],(int)$data['champc'],(int)$data['consc'],(int)$data['consc1'],(int)$data['microlab'],(int)$data['microlabc'],(int)$data['pathology'],(int)$data['pathologyc'],(int)$data['tw2'],(int)$data['tw3'],(int)$data['tw4'],(int)$data['tw5']],//(int)$data['tw5']],
                "showInLegend" => false
            ]],
                'credits' => ['enabled' => false],
            ]
]);?>
        </div>
<!--<div class="col-lg-6">
              <?= Highcharts::widget([
            
            'options' => [
                'colors'=> ['#ccbfff','blue'],
        
               "title" => [
               // "text" => 'Total order and  receive stocks',
            ],

            "subtitle" => [
                "text" => 'Report'
            ],

            "xAxis" => [
                 "categories" => ['Total order receive','Total stock Order request', ]
            ],

            "series" => [[
                "type"=> 'column',
                "colorByPoint" => false,
        //    "data" => [(int)$data['stock'],(int)$data['orderitem']],
                "showInLegend" => false
            ]],
                'credits' => ['enabled' => false],
            ]
]);?>
        </div>-->

 
    </div>

</div>