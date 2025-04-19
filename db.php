<?php
require_once 'config.php';

class Database {
    private $conn;
    
    public function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                DB_USER,
                DB_PASS
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            throw new Exception("Database connection failed: " . $e->getMessage());
        }
    }
    
    public function getConnection() {
        return $this->conn;
    }
    
    public function query($sql, $params = []) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch(PDOException $e) {
            throw new Exception("Query failed: " . $e->getMessage());
        }
    }
    
    public function insert($table, $data) {
        try {
            $columns = implode(', ', array_keys($data));
            $placeholders = implode(', ', array_fill(0, count($data), '?'));
            
            $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
            
            $this->query($sql, array_values($data));
            return $this->conn->lastInsertId();
        } catch(Exception $e) {
            throw new Exception("Insert failed: " . $e->getMessage());
        }
    }
    
    public function update($table, $data, $where, $whereParams = []) {
        try {
            $setClause = implode(', ', array_map(function($column) {
                return "$column = ?";
            }, array_keys($data)));
            
            $sql = "UPDATE $table SET $setClause WHERE $where";
            
            $params = array_merge(array_values($data), $whereParams);
            return $this->query($sql, $params);
        } catch(Exception $e) {
            throw new Exception("Update failed: " . $e->getMessage());
        }
    }
    
    public function delete($table, $where, $params = []) {
        try {
            $sql = "DELETE FROM $table WHERE $where";
            return $this->query($sql, $params);
        } catch(Exception $e) {
            throw new Exception("Delete failed: " . $e->getMessage());
        }
    }
    
    public function fetch($sql, $params = []) {
        try {
            return $this->query($sql, $params)->fetch();
        } catch(Exception $e) {
            throw new Exception("Fetch failed: " . $e->getMessage());
        }
    }
    
    public function fetchAll($sql, $params = []) {
        try {
            return $this->query($sql, $params)->fetchAll();
        } catch(Exception $e) {
            throw new Exception("FetchAll failed: " . $e->getMessage());
        }
    }
}
?> 