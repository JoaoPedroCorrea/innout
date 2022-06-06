<?php
session_start();
requireValidSession();

loadTemplateView('managerReport', []);