<?php
declare(strict_types=1);

$dummy = '';

for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 === 0) {
        echo 'HogeFuga';
    } elseif ($i % 3 === 0) {
        echo 'Fuga';
    } elseif ($i % 5 === 0) {
        echo 'Hoge';
    } else {
        echo $i;
    }
    echo PHP_EOL;
}
