<?php

function getSquareArea($base, $height)
{
    return $base * $height;
}
function getTriangleArea($base, $height)
{
    return $base * $height / 2;
}
function getTrapeZoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapeZoidArea(4, 5, 4);