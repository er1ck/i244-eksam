<?php
require_once(realpath(dirname(__FILE__)).'/classes/Database.php');
require_once(realpath(dirname(__FILE__)) . '/classes/Visitors.php');
use i244Exam\VisitorsCounter;
$recordVisit = false;
$visitorsCounter = new VisitorsCounter($recordVisit);
$visitorsCounter->resetVisitorCounter();

header('Location: http://enos.itcollege.ee/~eehrbach/i244-eksam/');
die();
?>