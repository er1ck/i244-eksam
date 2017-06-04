<?php

namespace i244Exam;


class VisitorsCounter
{
    private $currentTotal;
    private $allVisitors;
    private $lastVisitTime;

    /**
     * Visitor constructor.
     */
    public function __construct($insertVisitor){
        if ($insertVisitor) {
            $db = new Database();
            $db->insertVisitor();
        }
    }

    public function getTotalNumberOfVisitors() {
        $db = new Database();
        $this->allVisitors = $db->getVisitors();
        $this->currentTotal = count($this->allVisitors);

        return $this->currentTotal;
    }

    public function getLastVisitTime() {
        if (empty($this->allVisitors)) {
            $this->getTotalNumberOfVisitors();
        }

        $lastvisitor = count($this->allVisitors) - 1;
        return $this->allVisitors[$lastvisitor]["visitation_time"];
    }

    public function resetVisitorCounter() {
        $db = new Database();
        return $db->resetVisitors();
    }
}