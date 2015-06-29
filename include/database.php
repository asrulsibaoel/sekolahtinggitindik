<?php

    function connectMysql() {
         $dbHost = "localhost";
         $dbUser = "root";
         $dbPass = "";
         $dbName = "db_stt";
        mysql_connect($dbHost, $dbUser, $dbPass);
        mysql_select_db($dbName) or die("Database Not Found");
    }
    
    function save($table, $data) {
        $key = implode(' , ', array_keys($data));
        $val = array_values($data);
        for ($i = 0; $i < count($val); $i++) {
            $ar[$i] = '"' . $val[$i] . '"';
        }
        $val = (is_array($ar)) ? implode(',', $ar) : $ar;
        $query = mysql_query("insert into $table ($key) values ($val)");
        return $query;
    }

    function edit($table, $data, $where = "'1'='1'") {
        $key = array_keys($data);
        $val = array_values($data);
        for ($i = 0; $i < count($key); $i++) {
            $ar[$i] = $key[$i] . ' = "' . $val[$i] . '"';
        }
        $statement = (is_array($ar)) ? implode(',', $ar) : $ar;
        $query = mysql_query("update $table set $statement where $where");
        return $query;
    }

    function delete($table, $parameter) {
        $query = mysql_query("delete from $table where $parameter") or die(mysql_error());
        return $query;
    }

    function query($query) {
        $query = mysql_query("$query") or die(mysql_error());
        return $query;
    }

    function view($select) {
        $query = mysql_fetch_array($select);
        return $query;
    }

    function selectAll($tbl) {
        $query = mysql_query("select * from $tbl") or die(mysql_error());
        return $query;
    }

    function selectWhere($select, $tbl, $parameter) {
        $query = mysql_query("select $select from $tbl where $parameter") or die(mysql_error());
        return $query;
    }

    function selectCount($table, $parameter) {
        $query = mysql_num_rows(mysql_query("select count(*) from $table where $parameter")) or die(mysql_error());
        return $query;
    }



?>