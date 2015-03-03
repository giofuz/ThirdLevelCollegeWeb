<?php

class CourseTableGateway {

    private $connection;

    public function __construct($c) {
        $this->connection = $c;
    }

    public function getCourses() {
        // execute a query to get all managers
        $sqlQuery = "SELECT * FROM courses";

        $statement = $this->connection->prepare($sqlQuery);
        $status = $statement->execute();

        if (!$status) {
            die("Could not retrieve courses");
        }

        return $statement;
    }

    public function getCoursesById($id) {
        // execute a query to get the manager with the specified id
        $sqlQuery = "SELECT * FROM courses WHERE id = :id";

        $statement = $this->connection->prepare($sqlQuery);
        $params = array(
            "id" => $id
        );

        $status = $statement->execute($params);

        if (!$status) {
            die("Could not retrieve course");
        }

        return $statement;
    }

    public function insertCourse($n, $d, $c) {
        $sqlQuery = "INSERT INTO courses " .
                "(name, department, course_code) " .
                "VALUES (:name, :department, :course_code)";

        $statement = $this->connection->prepare($sqlQuery);
        $params = array(
            "name" => $n,
            "department" => $d,
            "course_code" => $c
        );

        $status = $statement->execute($params);

        if (!$status) {
            die("Could not insert course");
        }

        $id = $this->connection->lastInsertId();

        return $id;
    }

    public function deleteCourse($id) {
        $sqlQuery = "DELETE FROM courses WHERE id = :id";

        $statement = $this->connection->prepare($sqlQuery);
        $params = array(
            "id" => $id
        );

        $status = $statement->execute($params);

        if (!$status) {
            die("Could not delete course");
        }

        return ($statement->rowCount() == 1);
    }

    public function updateCourses($id, $n, $d, $c) {
        $sqlQuery =
                "UPDATE courses SET " .
                "name = :name, " .
                "department = :department, " .
                "course = :course_id " .
                "WHERE id = :id";

        $statement = $this->connection->prepare($sqlQuery);
        $params = array(
            "id" => $id,
            "name" => $n,
            "department" => $d,
            "course" => $c
        );

        $status = $statement->execute($params);

        return ($statement->rowCount() == 1);
    }
}
