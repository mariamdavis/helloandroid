<?php
//Creates a Movie that displays all the stored information when given an id.
class Movie {
    protected $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function display ($id) {
        $sql = "SELECT * FROM movies WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array($id));
        if (!$success) {
            trigger_error($stmt->errorInfo());
        } else {
            return $stmt ->fetchAll();
            
        }
    }
}



?>