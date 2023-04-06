<?php

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // login user

    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM admin WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();

        $hached_password = $row->password;
        if (password_verify($password, $hached_password)) {
            return $row;
        } else {
            return false;
        }
    }

    public function loginClient($email, $password)
    {
        $this->db->query('SELECT * FROM client WHERE email = :email ');
        $this->db->bind(':email', $email);
        $row = $this->db->single();

        // $hached_password = $row->password;
        if ($password === $row->password) {
            return $row;
        } else {
            return false;
        }
    }

    public function addClient($data){

        $this->db->query('INSERT INTO client (fullName,numero,adress,ville,email,userName,password) VALUE (:fullName,:numero,:adress,:ville,:email,:userName,:password)');

        // bind Value
        $this->db->bind(':fullName',$data['fullName']);
        $this->db->bind(':numero',$data['numero']);
        $this->db->bind(':adress',$data['adress']);
        $this->db->bind(':ville',$data['ville']);
        $this->db->bind(':email',$data['email']);
        $this->db->bind(':userName',$data['userName']);
        $this->db->bind(':password',$data['password']);

        // execute

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }


    // find user by email 
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM admin WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // check row 
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function findClientByEmail($email)
    {
        $this->db->query('SELECT * FROM client WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // check row 
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function getIdClientByIdProduct($id){
        $this->db->query("SELECT id_client FROM orders WHERE orders_id = :id");
        $this->db->bind(':id',$id);

        $results = $this->db->resultSet();

       return $results;
        
    }


    public function getClientById($id){
        $this->db->query("SELECT * FROM client WHERE id = :id");
        $this->db->bind(':id',$id);

        $results = $this->db->resultSet();

       return $results;
        
    }

    public function findClientById($id)
    {
        $this->db->query('SELECT * FROM client WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        // check row 
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
