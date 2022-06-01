<?php
// Temporary Controller 

loadModel('WorkingHours');

$wh = WorkingHours::loadFromUserAndDate(1, date('Y-m-d'));

$workedInterval = $wh->getWorkedInterval()->format('%H:%I:%S');
print_r($workedInterval);
echo '<br>';

$LunchInterval = $wh->getLunchInterval()->format('%H:%I:%S');
print_r($LunchInterval);
echo '<br>';

print_r($wh->getExitTime());