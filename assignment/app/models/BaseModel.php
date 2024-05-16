<?php
require_once "./../core/Database.php";
class BaseModel {
    protected $db;

    public function __construct() {
        $this->db = new Database();
    }

	public function execute($query, $params = []){
		$this->db->execute($query, $params = []);
	}

    public function createTable($tableName, $columns) {
        $this->db->createTable($tableName, $columns);
    }

	public function dropTable($tableName){
		$this->db->dropTable($tableName);
	}

    public function addColumn($tableName, $columnName, $type) {
        $this->db->addColumn($tableName, $columnName, $type);
    }

    public function insert($tableName, $data) {
        $this->db->insert($tableName, $data);
    }

    public function update($tableName, $data, $condition, $params = []) {
        $this->db->update($tableName, $data, $condition, $params);
    }

    public function delete($tableName, $condition, $params = []) {
        $this->db->delete($tableName, $condition, $params);
    }

    public function getById($tableName, $id) {
        return $this->db->getById($tableName, $id);
    }

    public function getAll($tableName) {
        return $this->db->getAll($tableName);
    }
}
?>
