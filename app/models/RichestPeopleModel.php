<?php

class RichestPeopleModel {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getRichestPeople()
    {
        $this->db->query('SELECT * FROM richestpeople');
        $result = $this->db->resultSet();
        return $result;
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM richestpeople WHERE Id = :Id");
        $this->db->bind(':Id', $id, PDO::PARAM_INT);
        return $this->db->execute();
    }
}