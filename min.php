<?php

$a = array(66,208,15,78,14,87);
function minn($qwe)
{ $b ="";
if($qwe[0]>=1)
{
    $b = $qwe[0];
}
    foreach($qwe as $item)
{
    if($b>=$item)
    {
        $b = $item;
    }
}
return $b;
}

echo minn($a);
echo "<br>";
echo min($a);

 ?>
