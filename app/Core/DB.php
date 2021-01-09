<?php
 
namespace app\Core;
 
class DB extends \PDO
{
    public function __construct($dsn = null, $username = null, $password = null, $options = array())
    {
        $dsn = ($dsn != null) ? $dsn : sprintf('pgsql:dbname=%s;host=%s', PG_DBNAME, PG_HOST);
        $username = ($username != null) ? $username : PG_USER;
        $password = ($password != null) ? $password : PG_PASS;
         
        parent::__construct($dsn, $username, $password, $options);
    }
}