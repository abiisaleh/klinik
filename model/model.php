<?php

class model
{
    protected $table;
    private $db;

    public function __construct()
    {
        $server = "localhost";
        $user = "root";
        $password = "";
        $db = "klinik";

        $this->db = mysqli_connect($server, $user, $password, $db);

        if (!$this->db) {
            die("Gagal..." . mysqli_connect_error());
        }
    }

    public function findAll()
    {
        $sql = "SELECT * FROM $this->table";
        $data = mysqli_query($this->db, $sql);
        return $data;
    }

    public function find($id)
    {
        $sql = "SELECT * FROM $this->table where id=$id";
        $data = mysqli_query($this->db, $sql)->fetch_assoc();
        return $data;
    }

    public function create(array $data)
    {
        $field = implode(", ", array_keys($data));
        $value = implode(", ", array_values($data));
        $sql = "INSERT INTO pendaftaran ($field) VALUES ($value)";
        $data = mysqli_query($this->db, $sql);
        return $data;
    }

    public function update($id, $data)
    {
        //
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id=$id";
        $data = mysqli_query($this->db, $sql);
        return $data;
    }
}
