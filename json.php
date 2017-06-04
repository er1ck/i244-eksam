<?php
require_once(realpath(dirname(__FILE__)).'/classes/Database.php');
require_once(realpath(dirname(__FILE__)) . '/classes/Visitors.php');
use i244Exam\VisitorsCounter;
$recordVisit = false;
$visitorsCounter = new VisitorsCounter($recordVisit);

$output = [
    "visitorCount" => $visitorsCounter->getTotalNumberOfVisitors(),
    "lastVisit" => $visitorsCounter->getLastVisitTime(),
    "resetUrl" => "http://enos.itcollege.ee/~eehrbach/i244-eksam/reset.php"
];

header('Content-Type: application/json');
echo json_encode($output);
?>