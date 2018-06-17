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
/*$xmlstr = simplexml_load_file('data.xml');
echo "PurchaseNumber: ". $xmlstr["PurchaseOrderNumber"].'.'.' OrderDate: '.$xmlstr["OrderDate"].PHP_EOL;
$n=1;
foreach ($xmlstr->Address as $address)
{
    echo "Order: ".$n." Address type: ".$address["Type"].PHP_EOL;
    echo "Name:". $address->Name.'. Street: '.$address->Street.'. City: '.$address->City.'. State: '.$address->State.'.'. ' Zip: '.$address->Zip.'.  Country: '.$address->Country.PHP_EOL;
    $n++;
}
$n=1;
echo 'Delivery notes: '.$xmlstr->DeliveryNotes.PHP_EOL;
foreach ($xmlstr->Items->Item as $item)
{
    echo "Order: ".$n." Part Number: ".$item["PartNumber"].PHP_EOL;
    echo 'Product name: '.$item->ProductName.'. Quantity: '.$item->Quantity.'. US Price: '.$item->USPrice.'. Comment: '.$item->Comment.'. Ship Date: '.$item->ShipDate.PHP_EOL;
    $n++;
}*/



//в цикле адреса

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
    compareJsonFiles("output2.json","output.json");

//---------------------------------task 3--------------------------------
/*echo evenNumbersFromCsv("numbers.csv");

//--------------------------------task 4--------------------------------
$url= 'https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json';
$json_file = file_get_contents($url);
$json_arr=json_decode($json_file, true);
//var_dump( $json_arr);
//внизу неверно должно быть получение значения без знания ключей и структуры многомерного массива
echo $json_arr["query"]["pages"][15580374]["pageid"];
echo $json_arr["query"]["pages"][15580374]["title"];*/
?>;
