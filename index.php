<?php

if ( setlocale(LC_TIME, 'Dutch_Belgium.1252') // Windows
)

$now = time();
$month = strftime('%B', $now);  //%B : full month name, based on the locale
$date = strftime('%m-%d');      // %m : 2digit representation of the month
                                      // %d : 2digit representation of the day

if ('03-21' <= $date && $date < '06-21') {
    $season = 'lente';
} elseif ('06-21' <= $date && $date < '09-21') {
    $season = 'zomer';
} elseif ('09-21' <= $date && $date < '12-21') {
    $season = 'herfst';
} else {
    $season = 'winter';
}

echo "Het is ${month} en we zijn in de ${season}.", PHP_EOL;