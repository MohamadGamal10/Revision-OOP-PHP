<?php

interface dbContract {
    public function select($columns = "*");
    public function insert($data);
    public function update($data);
    public function delete();
    public function excute();
    public function fetchAll();
    public function fetchOne();
    public function where($key, $operator, $value);
    public function Andwhere($column,$operator,$value);
    public function Orwhere($column,$operator,$value);
}

class db implements dbContract {

    private $table;

    private $sql;

    private $connection;

    public function __construct($host, $user, $pass, $db, $table) {
        $this->connection = mysqli_connect($host, $user, $pass, $db);
        $this->table = $table;
    }

    public function select($columns = "*") {
        $this->sql = "select $columns from `$this->table`";
        return $this;
    }

    public function insert($data) {
        $columns = "";
        $values = "";
        foreach ($data as $key => $value) {
            $columns .= "`$key`,";
            $values .= "'$value',";
        }
        $columns = rtrim($columns, ",");
        $values = rtrim($values, ",");
        // echo "insert into `$this->table` ($columns) values ($values)";
        $this->sql = "insert into `$this->table` ($columns) values ($values)";
        return $this;
    }

    public function update($data) {
        $keys = array_keys($data);
        $values = array_values($data);
        $str = "";
        foreach($values as $idx => $value) {
           $str .= "`$keys[$idx]`='$value',";
        }
        $str = rtrim($str, ",");

        $this->sql = "update `$this->table` set $str";
        return $this;
    }

    public function delete() {
        $this->sql = "delete from `$this->table`";
        return $this;
    }

    public function excute() {
        mysqli_query($this->connection, $this->sql);
        return mysqli_affected_rows($this->connection);
    }

    public function fetchAll(){
        $result = mysqli_query($this->connection, $this->sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function fetchOne(){
        $result = mysqli_query($this->connection, $this->sql);
        return mysqli_fetch_assoc($result);
    }

    public function where($key, $operator, $value){
        $this->sql .= " where `$key` $operator '$value'";
        return $this;
    }

    public function Andwhere($column,$operator,$value)
    {
        $this->sql .= " AND `$column` $operator '$value'";
        return $this;
    }

    public function Orwhere($column,$operator,$value)
    {
        $this->sql .= " OR `$column` $operator '$value'";
        return $this;
    }
}
