<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('serveralumnado.mysql.database.azure.com', 'server@serveralumnado', 'crisz101.');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
