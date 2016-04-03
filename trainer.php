<?php
/**
 * Created by PhpStorm.
 * User: taxfromus
 * Date: 4/3/16
 * Time: 4:40 PM
 */

// TAsk 1
$lang = array('html','css','php','js','jq');

foreach($lang as $temp){
    echo $temp.'<br>';
}

// TAsk 2
$numbers = array(1,20,15,17,24,35);

$result= 0;
foreach ($numbers as $temp){
    $result += $temp;
}

echo $result .'<br>';

// TAsk 3

$numbers = array(26,17,136,12,79,15);
$result= 0;
foreach ($numbers as $temp) {
    $result += $temp*$temp;
}
echo $result .'<br>';

// TAsk 4
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $value){
    echo $key.'_____'.$value."<br>";
}

// TAsk 5
$arr= array('Kolya' => 200, 'Vasya' => 300, 'Petya' => 400);
foreach ($arr as $key => $value) {
    //echo $key. '- зарплата '.$value .' долларов'.'<br>';
    echo "$key — зарплата $value долларов.";
}


 //   'Коля — зарплата 200 долларов.'.


// TAsk 7
echo"<br> Task7 <br>";
$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $temp){
    if($temp > 3 && $temp < 10){
      echo $temp.'<br>';
    }
}

echo"<br> Task8 <br>";
$arr = array( 1, 2, 3, 4, 5, 6, 7, 8, 9);
$result ='';
foreach ($arr as $temp) {
    $result .= $temp;
}
echo $result;

echo"<br> Task10 <br>";
for($i=11; $i<34; ++$i){
    if ($i % 2){
        echo$i.'<br>';
    }

}
?>