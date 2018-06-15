<?php
/**
 * Created by PhpStorm.
 * User: Роман Бурмистров
 * Date: 13.06.2018
 * Time: 21:59
 */
//task1
$xmlstr = simplexml_load_file('data.xml');
$xml=new SimpleXMLElement($xmlstr);
var_dump($xmlstr);
foreach ($PurchaseOrder->Address as $address) {
    echo $address;
}

/*foreach ($address as $address) {
    echo $address["type"];
}*/
//task 2
/*$array = array(
     <

$country = array('Russia'=>$city,'Cyprus','USA','Sweden');


$city = array('Moscow','Saint-Petersburg');


?>;*/
