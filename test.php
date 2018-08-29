<?php
echo "\n";
$k=9;
$l=$k-1;
$s=1;

for($i=1;$i<=$k;$i++)
{
for($m=1;$m<=$l;$m++)
{
    echo " ";
}
for($j=1;$j<=$s;$j++)
{
    if($j%2==1)
    echo "*";
    else
    echo "A";
}

$l--;
$s+=2;

echo "\n";
}
echo "\n";echo "\n";echo "\n";echo "\n";echo "\n";

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
    if($j%2==1)
    echo "*";
    else
    echo " ";
}
for($m=1;$m<=$t;$m++)
{
    if($m%2==1)
    echo "*";
    else
    echo " ";
}
for($j=1;$j<=$l;$j++)
{
    echo " ";
}
$l--;
$s+=2;
$t-=2;
echo "\n";
}
echo "\n";echo "\n";echo "\n";echo "\n";echo "\n";
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

echo "\n";echo "\n";echo "\n";echo "\n";echo "\n";
$l=$k-1;
$t=1;
for($i=1;$i<=$k;$i++)
{
    for($m=1;$m<=$l;$m++)
{
    echo " ";
}
$l--;
$t=$i;
for($j=1;$j<=$i;$j++)
    {
    echo $t--;
    }
    $t+=2;
    for($j=1;$j<=$i-1;$j++)
    {
        echo $t++;
    }
echo "\n";
}
?>



