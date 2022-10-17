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
}