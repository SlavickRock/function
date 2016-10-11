<?php

/**
* @author Slavick
* @copyright 2016
*/

$a = array(66,208,15,78,14,87,45);
function chunk($qwe, $cou)
{ $b =array();
$s = $qwe;
$coun = $cou-1;
foreach ($s as $value) {

$val[] = $value;
}
for ($y=key($s); $y < count($s);) {
for ($i=0; $i <$cou ; $i++) {

$d[] = $val[$y];

$y++;
if ($y >=count($s))break;
}
$b[] = $d;
unset($d);
}
return $b;

}

var_dump (chunk($a,3));
