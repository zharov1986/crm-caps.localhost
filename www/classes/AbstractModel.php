<?php


abstract class AbstractModel
{

    protected static $table;
    protected static $class;

    public static function getAll()
    {
        $db = new DB;
        $sql = 'SELECT * FROM '.DB_PREFIX. static::$table.' WHERE trash = 0';
        return $db->queryAll($sql,static::$class);
    }

    public  static  function getOne($id) {
        $db = new DB();
        $sql = 'SELECT * FROM '.DB_PREFIX.static::$table.' WHERE id='.$id;
        return $db->queryOne($sql,static::$class);
    }

}