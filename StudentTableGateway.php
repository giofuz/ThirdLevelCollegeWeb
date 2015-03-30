<?php

class StudentTableGateway {

    private $connection;
    
    public function __construct($c) {
        $this->connection = $c;
    }
    
    public function getStudents() {
        // execute a query to get all students
        $sqlQuery = "SELECT s.*, c.name AS CourseName
                    FROM studentsweb s 
                    LEFT JOIN courseweb c ON c.id = s.course_id"; 
        
        $statement = $this->connection->prepare($sqlQuery);
        $status = $statement->execute();
        
        if (!$status) {
            die("Could not retrieve users");
        }
        
        return $statement;
    }
    
    public function getStudentById($id) {
        // execute a query to get the user with the specified id
        $sqlQuery = "SELECT * FROM studentsweb WHERE id = :id";
        
        $statement = $this->connection->prepare($sqlQuery);
        $params = array(
            "id" => $id
        );
        
        $status = $statement->execute($params);
        
        if (!$status) {
            die("Could not retrieve user");
        }
        
        return $statement;
    }
    
    public function getStudentsByCourseId($courseID) {
        // execute a query to get all programmers
        $sqlQuery =
                "SELECT s.*, c.name AS CourseName
                    FROM studentsweb s
                    LEFT JOIN courseweb c ON c.id = s.course_id
                    WHERE s.course_id = 1";

        $params = array(
            'courseId' => $courseId
        );
        $statement = $this->connection->prepare($sqlQuery);
        $status = $statement->execute($params);

        if (!$status) {
            die("Could not retrieve programmers");
        }

        return $statement;
    }
    
    public function deleteStudent($id) {
        $sqlQuery = "DELETE FROM studentsweb WHERE id = :id";

        $statement = $this->connection->prepare($sqlQuery);
        $params = array(
            "id" => $id
        );

        $status = $statement->execute($params);

        if (!$status) {
            die("Could not delete user");
        }

        return ($statement->rowCount() == 1);
    }
    
    public function updateStudent($id, $n, $e, $m, $sn, $ad, $ag, $cid) {
        $sqlQuery =
                "UPDATE studentsweb SET " .
                "name = :name, " .
                "email = :email, " .
                "mobile = :mobile, " .
                "studentNumber = :studentNumber, " .
                "address = :address, " .
                "age = :age, " .
                "course_id = :course_id " .
                "WHERE id = :id";
        
        $statement = $this->connection->prepare($sqlQuery);
        $params = array(
            "id" => $id,
            "name" => $n,
            "email" => $e,
            "mobile" => $m,
            "studentNumber" => $sn,
            "address" => $ad,
            "age" => $ag,
            "course_id" => $cid
        );
        
       /* echo '<pre>';
        print_r ($_POST);
        print_r ($params);
        print_r ($sqlQuery);
        echo '</pre>';*/
        
        
        $status = $statement->execute($params);

        return ($statement->rowCount() == 1);
    }
    
    public function insertStudent($n, $e, $m, $sn, $ad, $ag, $cid) {
        $sqlQuery = "INSERT INTO studentsweb " .
                "(name, email, mobile, studentNumber, address, age, course_id) " .
                "VALUES (:name, :email, :mobile, :studentNumber, :address, :age, :course_id)";
        
        $statement = $this->connection->prepare($sqlQuery);
        $params = array(
            "name" => $n,
            "email" => $e,
            "mobile" => $m,
            "studentNumber" => $sn,
            "address" => $ad,
            "age" => $ag,
            "course_id" => $cid
        );
        
        $status = $statement->execute($params);
        
        if (!$status) {
            echo '<pre>';
            print_r($params);
            echo '</pre>';
            
            die("Could not insert user");
        }
        
        $id = $this->connection->lastInsertId();
        
        return $id;
    }
}


