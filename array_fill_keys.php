<?php

$a = array(66,208,15,78,14,87);
function keys($qwe,$key)
{

$b = array();
  foreach($qwe as $item)
  {
     $b[$item] = $key;

  }
  return $b;
}
var_dump(keys($a, 'fana'));
echo "<br>";
var_dump(array_fill_keys($a, 'banana'));
 ?>
