<?php
require 'DBConnect.php';

class user {

    public function hydrate(array $data){
        foreach ($data as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method))
            {
                $this->$method($value);
            }
        }
    }
    public function __construct() {
        $ctp = func_num_args();
        $args = func_get_args();
        if($ctp == 0)
        {
            
        }
        else{
            $this->hydrate($args[0]);
        }
        
    }

    private $Id;
    private $Prenom;
    private $Nom;
    private $Sexe;
    private $date_naissance;
    private $adresse;
    private $CIN;
    private $num_tel;
    private $nbr_point;
    private $image;
    private $username;
    private $password;
    
    /*getters*/
    public function getId(){
        return $this->id;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getSexe(){
        return $this->sexe;
    }
    public function getDate_naissance(){
        return $this->date_naissance;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function getCIN(){
        return $this->CIN;
    }
    public function getNum_tel(){
        return $this->num_tel;
    }
    public function getNbr_point(){
        return $this->nbr_point;
    }
    public function getImage(){
        return $this->image;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    /*setters*/
    public function setId($id){
        $this->id = $id;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setSexe($sexe){
        $this->sexe = $sexe;
    }
    public function setDate_naissance($email){
        $this->date_naissance = $date_naissance;
    }
    public function setAdresse($pays){
        $this->adresse = $adresse;
    }
    public function setCIN($commentaire){
        $this->CIN = $CIN;
    }
    public function setNum_tel($commentaire){
        $this->num_tel = $num_tel;
    }
    public function setNbr_point($commentaire){
        $this->nbr_point = $nbr_point;
    }
    public function setImage($commentaire){
        $this->image = $image;
    }
    public function setUsername($commentaire){
        $this->username = $username;
    }
    public function setPassword($commentaire){
        $this->password = $password;
    }

    public function ajouterUser(){
        $bdd = new DBConnect('localhost', 'pfc', 'root', '');
        $prenom = $nom = $sexe = $date_naissance = $adresse = $CIN = $num_tel = $username = $password = "";

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $sexe = $_POST['sexe'];
        $date_naissance = $_POST['date_naissance'];
        $adresse = $_POST['adresse'];
        $CIN = $_POST['CIN'];
        $num_tel = $_POST['num_tel'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO users (prenom, nom, sexe, date_naissance, adresse, CIN, num_tel, username, password ) "
                . "VALUES ('".$prenom."','".$nom."','".$sexe."','".$date_naissance."','".$adresse."','".$CIN."','".$num_tel."','".$username."','".$password."')";
        
        $bdd->QueryExecute($sql);
    }
}
