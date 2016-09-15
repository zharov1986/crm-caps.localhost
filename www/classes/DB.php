<?php

define("DB_PREFIX", "lk_");

class DB
{

    public function __construct()
    {
        mysql_connect('localhost','crmcaps','crmcaps');
        mysql_select_db('crmcaps');
    }

    public function queryAll($sql, $class='stdClass')
    {
        $res = mysql_query($sql);
        if($res === false) {
            return false;
        }
        $ret = array();
        while($row = mysql_fetch_object($res, $class)) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function queryOne($sql, $class='stdClass')
    {
        $item = $this->queryAll($sql, $class);
        return $item[0];
    }
}