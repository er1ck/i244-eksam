<?php
require_once(realpath(dirname(__FILE__)).'/classes/Database.php');
require_once(realpath(dirname(__FILE__)) . '/classes/Visitors.php');
use i244Exam\VisitorsCounter;

$visitorsCounter = new VisitorsCounter();
?>

<html>
<head></head>
<body>
<h1>Visitor counter:</h1>
<h2><?php echo $visitorsCounter->getTotalNumberOfVisitors()?></h2>

</body>
</html>