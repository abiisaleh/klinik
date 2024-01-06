<?php

class model
{
    protected $table;
    protected $primaryKey = 'id';
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
        $sql = "SELECT * FROM $this->table where $this->primaryKey=$id";
        $data = mysqli_query($this->db, $sql)->fetch_assoc();
        return $data;
    }

    public function create(array $data)
    {
        foreach ($data as $key => $value) {
            $keys[] = $key;
            $values[] = "'$value'";
        }

        $field = implode(", ", $keys);
        $value = implode(", ", $values);
        $sql = "INSERT INTO $this->table ($field) VALUES ($value)";
        print_r($sql);
        $data = mysqli_query($this->db, $sql);
        return $data;
    }

    public function update(string $id, array $data)
    {
        $dataToString = array_map(function ($key, $value) {
            return "$key=\"$value\"";
        }, array_keys($data), $data);

        $keyValue = implode(', ', $dataToString);

        $sql = "UPDATE pendaftaran SET $keyValue WHERE $this->primaryKey=$id";

        $data = mysqli_query($this->db, $sql);
        return $data;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE $this->primaryKey=$id";
        $data = mysqli_query($this->db, $sql);
        return $data;
    }
}
