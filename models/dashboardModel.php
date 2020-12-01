
<?php




class dashboardModel extends Model
{

    public function getAll()
    {

        $pdo = $this->db->connect();
        $result = $pdo->query("SELECT * FROM employees;");
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
