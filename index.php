<?php
require_once(realpath(dirname(__FILE__)) . '/classes/Database.php');
require_once(realpath(dirname(__FILE__)) . '/classes/Visitors.php');
use i244Exam\VisitorsCounter;

$recordVisit = true;
$visitorsCounter = new VisitorsCounter($recordVisit);
?>

<html>
<head></head>
<body>
<h1>Visitor counter:</h1>
<h2><?php echo $visitorsCounter->getTotalNumberOfVisitors() ?></h2>
<h3>Last visit was done at:</h3>
<h4><?php echo $visitorsCounter->getLastVisitTime() ?></h4>

<p>
    <a href="reset.php">Reset counter</a>
</p>
<p>
    <a href="json.php">See JSON</a> - <small>NB! JSON endpoint does not record a visit!</small>
</p>
</body>
</html>