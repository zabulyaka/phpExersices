<?php 

$phrase="Теперь пора всем хорошим людям прийти на помощь стране";

echo $phrase.";<br />";

list($now, $time, $all, $good, $people, $come, $to, $help, $country) = explode(" ", $phrase);

$time="Пора";
$now="теперь";
$phrase="$time $now $country $come $to $help $all $good $people";

echo $phrase.".";

 ?>