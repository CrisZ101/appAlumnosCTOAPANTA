<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=serveralumnado.mysql.database.azure.com;dbname=alumnado;charset=utf8', 'server@serveralumnado', 'crisz101.');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
