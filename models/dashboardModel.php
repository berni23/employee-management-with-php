
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
        try{
            $pdo = $this->db->connect();

        
            $sql = "INSERT INTO employees (name,email,age,streetAddress,city,state,postalCode,phoneNumber) 
                VALUES (:name,:email,:age,:streetAddress,:city,:state,:postalCode,:phoneNumber)";
            $stmt= $pdo->prepare($sql);
            $stmt->execute(['name' => $data['name'], 
                            'email' => $data['email'], 
                            'age' => $data['age'], 
                            'streetAddress' => $data['streetAddress'],
                            'city' => $data['city'],
                            'state' => $data['state'],
                            'postalCode' => $data['postalCode'],
                            'phoneNumber' => $data['phoneNumber']]);

            return true;
        }catch(PDOException $e) {
            echo 'Ya existe el empleado';
            return false;
        }
    }

    
}
