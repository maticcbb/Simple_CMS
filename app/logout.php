<?php
/* Wylogowanie usuwa sesje rozpoczyna nową i przekierowuje do formularza */
include("./init.php");

$CMS_Core->Auth->logout();

$CMS_Core->Template->redirect(SITE_PATH);