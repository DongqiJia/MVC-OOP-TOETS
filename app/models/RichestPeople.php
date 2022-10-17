<?php

class RichestPeople {
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

    public function getSingleRichestPeople($id)
    {
        $this->db->query("SELECT * FROM richestpeople Where Id = :Id");
        $this->db->bind(':Id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }
}