<?php


class Model
{
    private static $pdo= NULL;
    public static function init(){
        require_once ("Conf.php");
        $database = Conf::getdatabase();
        $hostname = Conf::getHostname();
        $login = Conf::getLogin();
        $password = Conf::getpassword();
        try {
            self::$pdo = new PDO("mysql:host=$hostname;dbname=$database",$login,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch (PDOException $e){
            echo $e->getMessage();
            die();
        }
    }

    /**
     * @return null
     */
    public static function getPdo()
    {
        if (is_null(self::$pdo))  {
            self::init();
        }
        return self::$pdo;
    }

}