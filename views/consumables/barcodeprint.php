<?php

use yii\helpers\Html;
use barcode\barcode\BarcodeGenerator as BarcodeGenerator;


/* @var $this yii\web\View */
/* @var $model app\models\Barcodecontrols */

$this->title = '';

?>

<script>
    function printNow(){
        $("#printout").print();
    }
    
    function printArea(divName){
        $(".footer").addClass('hide');
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        console.log(printContents);
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

            
<button class="btn btn-primary pull-right" onclick="printArea('printout')">Print</button>

    <div id="printout">
        <?php 

         foreach ($model as $value) {?>
            <div id="showBarcode_<?= $value->id;?>" class="barcode"></div>
            <?php $optionsArray = array(
            'elementId'=> 'showBarcode_'.$value->id, /* div or canvas id*/
            'value'=> $value->consbarcode, /* value for EAN 13 be careful to set right values for each barcode type */
            'type'=>'code128',/*supported types  ean8, ean13, upc, std25, int25, code11, code39, code93, code128, codabar, msi, datamatrix*/
              
            );
            echo BarcodeGenerator::widget($optionsArray);
        }
        ?>
          <?= Html::a('Print', ['barcode', 'id' => $value->id], ['class' => 'btn btn-success glyphicon glyphicon-print','style'=>'float:right'])  ?>

    </div>

<script>
    $(document).ready(function(){
        $(".barcode").removeAttr("style");
        $(".barcode").attr("style", "page-break-after:always;display:block;padding-left: 1px;padding-top: 5px;width: 90px;margin-left: 32px;margin-top:25px;");
    });
</script>

