<?php
/**
 * Created by PhpStorm.
 * User: Роман Бурмистров
 * Date: 16.06.2018
 * Time: 17:15
 */

/**
 * Created by PhpStorm.
 * User: Роман Бурмистров
 * Date: 13.06.2018
 * Time: 21:59
 */
require('src/functions.php');
//task1
$xmlstr = simplexml_load_file('data.xml');

/*$xml=new SimpleXMLElement($xmlstr);*/




echo $xmlstr->PurchaseOrder["PurchaseOrderNumber"];
foreach ($xmlstr->Address->Name as $name) {
    echo $name;}

//-----------------------task 2--------------------

$cats = array('Tiger','Lion','Panther');
$dogs = array('wolf','jackal','fox');
$animals=array($cats,$dogs);
writeJsonFile($animals,"output.json");
$need_change=rand(0,1);
$insects=array('ant','butterfly','caterpillar');
if ($need_change) {
    writeNewJson($insects, 'output.json', 'output2.json');
}
else {
    writeJsonFile($animals,"output2.json");
    }
   // compareJsonFiles("output2.json","output.json");

//---------------------------------task 3--------------------------------
echo evenNumbersFromCsv("numbers.csv");

//--------------------------------task 4--------------------------------
$url= 'https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json';
$json_file = file_get_contents($url);
$json_arr=json_decode($json_file, true);
var_dump( $json_arr);
?>;