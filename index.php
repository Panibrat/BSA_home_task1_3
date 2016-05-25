<?php
function TriangleNumbersGenerator($limit = 15)
{
    for($i = 0; $i < $limit; ++$i) {
        yield 0.5 * $i * ($i+1);
    }
}
foreach(TriangleNumbersGenerator() as $number) {
    echo $number . ' ';
}