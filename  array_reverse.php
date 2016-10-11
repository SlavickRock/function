<?php

$a = array(66,208,15,78,14,87);

function rever($qwe)
{ end($qwe);
  $b = array();
  for($i = key($qwe); $i>=0; $i--)
  {
      $b[] = $qwe[$i];
  }
  return $b;
}
var_dump(rever($a));
echo "<br>";
var_dump(array_reverse($a));
 ?>
