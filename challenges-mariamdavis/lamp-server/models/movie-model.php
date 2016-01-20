<?php
//Creates Movies that searches for all movies that contain the given keyword in the title.
class Movies {
    protected $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function search ($id) {
        if(isset($id)) {
            $sql = "SELECT * FROM movies WHERE title LIKE ?";
        } else {
            $sql = "SELECT * FROM movies";
        }    
        
        $stmt = $this->conn->prepare($sql);
        $success = $stmt->execute(array("%". $id ."%"));
        if (!$success) {
            trigger_error($stmt->errorInfo());
        } else {
            return $stmt ->fetchAll();
            
        }
    }
}



?>