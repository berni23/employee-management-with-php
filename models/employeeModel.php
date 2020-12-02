
<?php



class employeeModel extends Model
{

    public function getById($id)
    {
        $pdo = $this->db->connect();
        $result = $pdo->query("SELECT * FROM employees WHERE id = '$id';");
        return $result->fetch(PDO::FETCH_ASSOC);
    }


    public function updateById($id, $data)
    {

        $pdo = $this->db->connect();

        try {
            $pdo = $this->db->connect();
            $sql = "UPDATE employees SET gender=:gender,lastName=:lastName,name=:name,email=:email,age=:age,streetAddress=:streetAddress,city=:city,state=:state,postalCode=:postalCode,phoneNumber=:phoneNumber WHERE id=$id;";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
}
