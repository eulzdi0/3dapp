<?php
class Database {
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO('sqlite:../database/database.sqlite');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function execute($query, $params = []) {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Query execution failed: " . $e->getMessage());
        }
    }

    public function createTable($tableName, $columns) {
        $query = "CREATE TABLE IF NOT EXISTS $tableName ($columns)";
        $this->execute($query);
    }
	
	public function dropTable($tableName){
		$query = "DROP TABLE IF EXISTS $tableName;";
		$this->execute($query);
	}

    public function addColumn($tableName, $columnName, $type) {
        $query = "ALTER TABLE $tableName ADD COLUMN $columnName $type";
        $this->execute($query);
    }

    public function insert($tableName, $data) {
        $keys = implode(', ', array_keys($data));
        $placeholders = rtrim(str_repeat('?, ', count($data)), ', ');

        $query = "INSERT INTO $tableName ($keys) VALUES ($placeholders)";
        $this->execute($query, array_values($data));
    }

    public function update($tableName, $data, $condition, $params = []) {
        $setClause = implode(' = ?, ', array_keys($data)) . ' = ?';
        $query = "UPDATE $tableName SET $setClause WHERE $condition";
        $this->execute($query, array_merge(array_values($data), $params));
    }

    public function delete($tableName, $condition, $params = []) {
        $query = "DELETE FROM $tableName WHERE $condition";
        $this->execute($query, $params);
    }

    public function getById($tableName, $id) {
        $query = "SELECT * FROM $tableName WHERE id = ?";
        $result = $this->execute($query, [$id]);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll($tableName) {
        $query = "SELECT * FROM $tableName";
        $result = $this->execute($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
