<?php
class Student {
    private $id;
    private $name;
    private $email;
    private $mobile;
    private $studentNumber;
    private $address;
    private $age;
    private $courseID;
    
    public function __construct($id, $n, $e, $m, $sn, $ad, $ag, $cid){
        $this->id = $id;
        $this->name = $n;
        $this->email = $e;
        $this->mobile = $m;
        $this->studentNumber = $sn;
        $this->address = $ad;
        $this->age= $ag;
        $this->courseID= $cid;
    }
    
    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getEmail() { return $this->email; }
    public function getMobile() { return $this->mobile; }
    public function getStudentNumber() { return $this->studentNumber; }
    public function getAddress() { return $this->address; }
    public function getAge() { return $this->age; }
    public function getCourseID() { return $this->courseID; }
}
