<?php
$now = new DateTime();
echo $now->format('D');

$now->modify('+3 days');
echo $now->format('D');
