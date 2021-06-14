<?php
class User_model {
    private $table = 'person';
    private $db ; 
    public function __construct() {
        $this->db = new Database;
    }

    public function get($username) {
        $this->db->query('SELECT * FROM person WHERE username=:username');
        $this->db->bind('username', $username);
        return $this->db->single();
    }
}