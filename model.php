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
        var_dump($sql);
        $data = mysqli_query($this->db, $sql);
        return $data;
    }
}
