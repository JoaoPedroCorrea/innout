<?php
session_start();
requireValidSession();

loadModel('WorkingHours');

$date = (new DateTime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);

loadTemplateView('dayRecords', ['today' => $today]);