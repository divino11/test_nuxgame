<?php

$dataset = [3, 4, 6, 9, 10, 12, 14, 15, 17, 19, 21];
$searchNumber = new SearchNextSmallNumber($dataset);

$result1 = $searchNumber->searchWithForeach(11);
$result2 = $searchNumber->searchWithFilter(11);

echo "Result1: {$result1}" . PHP_EOL;
echo "Result2: {$result2}";