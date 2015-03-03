<?php

class StudentTableGateway {

    private $connection;
    
    public function __construct($c) {
        $this->connection = $c;
    }
    
    public function getStudents() {
        // execute a query to get all students
        $sqlQuery = "SELECT * FROM studentsweb";
        
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
    
    public function updateStudent($id, $n, $e, $m, $sn, $ad, $ag) {
        $sqlQuery =
                "UPDATE studentsweb SET " .
                "name = :name, " .
                "email = :email, " .
                "mobile = :mobile, " .
                "studentNumber = :studentNumber, " .
                "address = :address, " .
                "age = :age " .
                "WHERE id = :id";
        
        $statement = $this->connection->prepare($sqlQuery);
        $params = array(
            "id" => $id,
            "name" => $n,
            "email" => $e,
            "mobile" => $m,
            "studentNumber" => $sn,
            "address" => $ad,
            "age" => $ag
        );
        
        $status = $statement->execute($params);

        return ($statement->rowCount() == 1);
    }
    
    public function insertStudent($n, $e, $m, $sn, $ad, $ag) {
        $sqlQuery = "INSERT INTO studentsweb " .
                "(name, email, mobile, studentNumber, address, age) " .
                "VALUES (:name, :email, :mobile, :studentNumber, :address, :age)";
        
        $statement = $this->connection->prepare($sqlQuery);
        $params = array(
            "name" => $n,
            "email" => $e,
            "mobile" => $m,
            "studentNumber" => $sn,
            "address" => $ad,
            "age" => $ag
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

