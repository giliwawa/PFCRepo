<?php

class DBConnect {
    private $bdd;
    
    public function __construct($host,$database,$user,$password) {
        try
        {
                $this->bdd = new PDO('mysql:host='.$host.';dbname='.$database.';charset=utf8', $user, $password);
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    }
    public function QueryExecute($query){
        $this->bdd->exec($query);
    }
    public function QueryRequest($query){
        $request = $this->bdd->query($query);
        return $request;
    }
    
    
}
