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
echo "<p> <strong>PurchaseNumber:</strong> ". $xmlstr["PurchaseOrderNumber"].'.'.' <strong>OrderDate:</strong>'.$xmlstr["OrderDate"]."</p>";
$n=1;
foreach ($xmlstr->Address as $address)
{
    echo "<p><strong>Order:</strong> ".$n."<strong> Address type:</strong> ".$address["Type"]."</p>";
    echo "<p><strong>Name:</strong>". $address->Name.'. <strong>Street:</strong> '.$address->Street.'. <strong>City:</strong> '.$address->City.'. <strong>State:</strong>'.$address->State.'.'.'<strong>Zip:</strong>'.$address->Zip.'. <strong>Country:</strong>'.$address->Country.'</p>';
    $n++;
}
$n=1;
echo '<p><strong>Delivery notes:</strong>'.$xmlstr->DeliveryNotes.'</p>' ;
foreach ($xmlstr->Items->Item as $item)
{
    echo " <p><strong>Order:</strong> ".$n."<strong> Part Number:</strong> ".$item["PartNumber"]. '</p>';
    echo ' <p><strong>Product name:</strong> '.$item->ProductName.'.<strong>Quantity:</strong>'.$item->Quantity.'.<strong>US Price:</strong> '.$item->USPrice.'.<strong>Comment:</strong> '.$item->Comment.'.<strong>Ship Date:</strong>'.$item->ShipDate.'</p>';
    $n++;
}


//-----------------------task 2--------------------

$cats = array('Tiger','Lion','Panther');
$dogs = array('wolf','jackal','fox');
$animals=array($cats,$dogs);
writeJsonFile($animals,"output.json");
$need_change=rand(0,1);
$newdogs=array('wolf','jackal');
//$need_change
if ($need_change) {
    writeNewJson($newdogs, 'output.json', 'output2.json');
}
else {
    writeJsonFile($animals,"output2.json");
    }
    compareJsonFiles("output.json","output2.json");

//---------------------------------task 3--------------------------------
echo evenNumbersFromCsv("numbers.csv").PHP_EOL;

//--------------------------------task 4--------------------------------
$url= 'https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json';
$json_file = file_get_contents($url);
$json_arr=json_decode($json_file, true);
//var_dump( $json_arr);
//внизу неверно должно быть получение значения без знания ключей и структуры многомерного массива
echo "page id= ". $json_arr["query"]["pages"][15580374]["pageid"].PHP_EOL;
echo "title= ".$json_arr["query"]["pages"][15580374]["title"];
?>;
