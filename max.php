<?php
$a = array(66,208,15,78,14,87);


 function maxx($qwe)
 {$b ="";
    foreach($qwe as $item)
{
    if($b<=$item)
    {
        $b = $item;
    }
}
return $b;
}
echo maxx($a);
echo "<br>";
echo max($a);
?>
