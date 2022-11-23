<?php

$date = new DateTime;
$futurDate = new DateTime;


$futurDate->add(new DateInterval('PT2H'));

var_dump($date);

echo $date->format('F 0j Y g:i a ');
echo $futurDate->format('F 0j Y g:i a ');