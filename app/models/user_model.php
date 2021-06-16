<?php
class User_model {
    private $table = 'person';
    private $db ; 
    public function __construct() {
        $this->db = new Database;
    }

    public function get($id) {
        $this->db->query('SELECT * FROM person WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getAllPerson()
    {
        $this->db->query('SELECT * FROM person ' );
        return $this->db->resultSet();

    }
}