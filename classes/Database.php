<?php
namespace i244Exam;
use PDO;
use PDOException;

class Database {

    private $con;
    private $user = 'test';
    private $pass = 't3st3r123';
    private $tablePrefix = 'eehrbach_';

    /**
     * DB constructor.
     */
    public function __construct()
    {
        try {
            $this->con = new PDO('mysql:host=localhost;dbname=test', $this->user, $this->pass);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function insertVisitor() {
        $con = $this->con;

        $stmnt = $con->prepare("INSERT INTO eehrbach_visitors(ip_address, visitation_time) VALUES (:ipAddress, :visitationTime)");
        $stmnt->execute(array(
            "ipAddress" => "192.168.0.1",
            "visitationTime" => date("Y-m-d H:i:s")
        ));
    }

    public function getVisitors() {
        $con = $this->con;

        $stmnt = $con->prepare("SELECT * FROM eehrbach_visitors");
        $stmnt->execute();

        return $stmnt->fetchAll();
    }
}