<?php
function sum(....$num)
{
    $add=0;
    foreach ($num as $k)
    {
        $add+=$k;
    }
    return $add;
}
echo sum(4,6,43,66,32,86,122,121,234,123);