<?php
$k=5;
$l=$k-1;
$s=1;
$t=$k*2-1;
for($i=1;$i<=$k;$i++)
{
    for($m=1;$m<=$l;$m++)
    {
        echo " ";
    }
    for($j=1;$j<=$s;$j++)
    {
    
    echo $i;
    }
    $l--;
$s+=2;
echo "\n";
}
?>