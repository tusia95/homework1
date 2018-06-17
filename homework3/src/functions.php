<?php
/**
 * Created by PhpStorm.
 * User: Роман Бурмистров
 * Date: 16.06.2018
 * Time: 17:14
**/
//task 2.1
function writeJsonFile ($array,$fname)
{
    $json_str=json_encode($array);
    $fp = fopen($fname, "w");
    fwrite($fp, $json_str);
}

//task 2.2
function writeNewJson ($newarray,$fname,$newfname){
    fopen($fname, "r");
    $content = file_get_contents($fname);
    $content_arr=json_decode($content);
    $content_arr[]=$newarray;
    $content_json=json_encode($content_arr);
    // echo $new_animal_json;
    $fp=fopen($newfname,"w");
    fwrite($fp, $content_json);
}

function compareJsonFiles($fname,$newfname) {
    fopen($fname, "r");
    $content = file_get_contents($fname);
    $content_arr=json_decode($content);
    fopen($newfname, "r");
    $content_new = file_get_contents($newfname);
    $new_content_arr=json_decode($content_new);
    var_dump($new_content_arr);
    $differ_arr=array();
    for ($i=0;$i<count($new_content_arr);$i++)
    {
        $differ_arr[]=array_diff($new_content_arr[$i],$content_arr[$i]);
    }
    var_dump($differ_arr);
}
//-------------------------------task 3------------------------
function evenNumbersFromCsv($fname) {
    $random_arr=array();
    for ($i=0;$i<60;$i++)
    {
        $rand_number=rand(1,100);
        $random_arr[$i]=$rand_number;
    }
    $random_str=implode("/",$random_arr);
    $fp=fopen($fname,"w");
    fwrite($fp, $random_str);
    fopen($fname, "r");
    $content = file_get_contents($fname);
    $arr_from_csv= explode("/",$content);
    $n=0;
    foreach ($arr_from_csv as $value)
    {
        if($value%2==0)
        {
            $n++;
        }
    }
   return $n;
}
