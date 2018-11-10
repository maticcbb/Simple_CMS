<?php
/* Wylogowanie usuwa sesje rozpoczyna nową i przekierowuje do formularza */
include("includes/init.php");

$Auth->logout();

$Template->setAlert('Wylogowałeś się','success');
$Template->redirect('login.php');