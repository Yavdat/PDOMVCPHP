<?php

class DB
{

    private $dbh;

    public function __construct()
    {
        $this->dbh=new PDO('mysql:dbname=test;host=localhost','root','');
    }

    public function query($sql,$params=[])
    {
        $sth=$this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll();
    }

    /*public function query($sql, $class='stdClass')
    {
        $res = mysql_query($sql);
        if (false === $res) {
            return false;
        }
        $ret =[];
        while($row=mysql_fetch_object($res,$class))
        {
            $ret[]=$row;
        }
        return $ret;
    }*/

    public function queryAll($sql, $class='stdClass')
    {
        return $this->query($sql,$class);
    }

    public function queryOne($sql, $class='stdClass')
    {
        return $this->query($sql,$class)[0];
    }
}