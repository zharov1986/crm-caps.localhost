<?php


require_once __DIR__ . '/../classes/DB.php';

class Zayavki
    extends AbstractModel
{

    public $id;
    public $name;
    public $fname;
    public $oname;
    public $phone;
    public $email;

    protected static $table = 'zayavki';
    protected static $class = 'Zayavki';


}