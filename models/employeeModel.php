
<?php



class employeeModel extends Model
{

    public function getById($id)
    {
        $pdo = $this->db->connect();
        $result = $pdo->query("SELECT * FROM employees WHERE id = '$id';");
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
