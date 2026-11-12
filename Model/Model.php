
<?php


class Model{
    private PDO $pdo;


    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=supergame', 'root', 'root',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

    public function getPdo(): PDO
    {
        return $this->pdo;
    }
  
}