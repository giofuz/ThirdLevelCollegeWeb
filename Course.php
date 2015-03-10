<?php
class Course {
    private $id;
    private $name;
    private $department;
    private $course_code;

    
    public function __construct($id, $n, $d, $cc){
        $this->id = $id;
        $this->name = $n;
        $this->department = $d;
        $this->course_code = $cc;
        
    }
    
    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getDepartment() { return $this->department; }
    public function getCourse() { return $this->course_code; }
 
}
