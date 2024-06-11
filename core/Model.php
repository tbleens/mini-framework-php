<?php

namespace Core;

use PDO;

class Model{
    protected $db;
    protected $table;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll()
    {
        $stmt = $this->db->query("SELECT * from {$this->table}");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * from {$this->table} WHERE id=:id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function where(array $data)
    {
        $fields = '';
        $i = 0;
        foreach ($data as $key => $value) {
            $fields .= $i==0 ? "": " AND ";
            $fields .= "{$key} = :{$key}";
            $i++;
        }
        $stmt = $this->db->prepare("SELECT * from {$this->table} WHERE {$fields}");
        $stmt->execute($data);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create(array $data) {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        $stmt = $this->db->prepare("INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})");
        return $stmt->execute($data);
    }

    public function update($id, array $data) {
        $fields = '';
        foreach ($data as $key => $value) {
            $fields .= "{$key} = :{$key}, ";
        }
        $fields = rtrim($fields, ', ');
        $data['id'] = $id;
        $stmt = $this->db->prepare("UPDATE {$this->table} SET {$fields} WHERE id = :id");
        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM {$this->table} WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}