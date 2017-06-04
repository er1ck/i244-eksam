<?php

namespace i244Exam;


class VisitorsCounter
{
    private $currentTotal;

    /**
     * Visitor constructor.
     */
    public function __construct(){
        $db = new Database();
        $db->insertVisitor();
    }

    public function getTotalNumberOfVisitors() {
        $db = new Database();
        $allVisitors = $db->getVisitors();
        $this->currentTotal = count($allVisitors);

        return $this->currentTotal;
    }
}