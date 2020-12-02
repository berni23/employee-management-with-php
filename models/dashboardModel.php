
<?php




class dashboardModel extends Model
{

    public function getAll()
    {

        $pdo = $this->db->connect();
        $result = $pdo->query("SELECT * FROM employees;");
        return $result->fetchAll();
    }

    public function insertEmployee($data)
    {
        $pdo = $this->db->connect();

        
        $sql = "INSERT INTO employee (name,email,age,streetAddress,city,state,postalCode,phoneNumber) 
                VALUES (:name,:email,:age,:streetAddress,:city,:state,:postalCode,:phoneNumber)";
        $stmt= $pdo->prepare($sql);
        return $stmt->execute($data);
    }

    
}
