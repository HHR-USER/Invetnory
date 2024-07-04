<?php
namespace app\reports;
use \koolreport\KoolReport;
use \koolreport\processes\Filter;
use \koolreport\processes\TimeBucket;
use \koolreport\processes\Group;
use \koolreport\processes\Limit;
class MyReport extends \koolreport\KoolReport
   {
    public function settings()
      {
        return array(
            "dataSources"=>array(
                "Dbconnecton"=>array(
                    "connectionString"=>"mysql:host=localhost;dbname=inventory",
                    "username"=>"root",
                    "password"=>"root",
                    "charset"=>"utf8"
                )
            ),
            "assets"=>array(
                "path"=>"../web/assets",
                "url"=>"assets"
            )
        );
    }   
    protected function setup()
      {
        $this->src('Dbconnecton')
        ->query("SELECT consumables.expairedate,consumables.quantity FROM inventory.consumables")
        ->pipe(new TimeBucket(array(
            "expairedate"=>"month"
        )))->pipe(new Group(array(
            "by"=>"expairedate",
            "sum"=>"quantity"
        )))->pipe($this->dataStore('imsstore'));
    }}