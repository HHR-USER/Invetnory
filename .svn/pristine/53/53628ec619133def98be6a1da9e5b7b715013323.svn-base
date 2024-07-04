<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\ColumnChart;
?>
<div class="report-content">
    <div class="text-center">
        <h1>MySQL Report</h1>
        <p class="lead">This report show how to build report from MySQL data</p>
    </div>

    <?php
    ColumnChart::create(array(
        "dataStore"=>$this->dataStore('imsstore'),  
        "columns"=>array(
            "expairedate"=>array(
                "label"=>"Month",
                "type"=>"datetime",
                "format"=>"Y-n",
                "displayFormat"=>"F, Y",
            ),
            "quantity"=>array(
                "label"=>"Amount",
                "type"=>"number",
                "prefix"=>"$",
            )
        ),
        "width"=>"100%",
    ));
    ?>

    <?php
    Table::create(array(
        "dataStore"=>$this->dataStore('imsstore'),
        "columns"=>array(
            "expairedate"=>array(
                "label"=>"Month,Year",
                "type"=>"datetime",
                "format"=>"Y-n",
                "displayFormat"=>"F, Y",
            ),
        "quantity"=>array(
                "label"=>"Amount",
                "type"=>"number",
                "prefix"=>"$",
                        )
           
           ),
        "cssClass"=>array(
        "table"=>"table table-hover table-bordered"
        ))
    );
    ?>
</div>