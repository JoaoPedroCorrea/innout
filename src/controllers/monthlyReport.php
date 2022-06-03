<?php
session_start();
requireValidSession();

$user = $_SESSION['user'];

$registries = WorkingHours::getMonthlyReport($user->id, new DateTime());

loadTemplateView('monthlyReport', [
    'registries' => $registries
]);