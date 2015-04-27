<?php

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
    public function __construct($x) {
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
    private $email;
    private $previlege;
    private $username;
    private $password;
    
    /*getters*/
    public function getId(){
        return $this->Id;
    }
    public function getPrenom(){
        return $this->Prenom;
    }
    public function getNom(){
        return $this->Nom;
    }
    public function getSexe(){
        return $this->Sexe;
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
    public function getEmail(){
        return $this->email;
    }
    public function getPrivilege(){
        return $this->privilege;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    /*setters*/
    public function setid_user($id){
        $this->id = $id;
    }
    public function setprenom($prenom){
        $this->prenom = $prenom;
    }
    public function setnom($nom){
        $this->nom = $nom;
    }
    public function setsexe($sexe){
        $this->sexe = $sexe;
    }
    public function setdate_naissance($date_naissance){
        $this->date_naissance = $date_naissance;
    }
    public function setadresse($adresse){
        $this->adresse = $adresse;
    }
    public function setCIN($CIN){
        $this->CIN = $CIN;
    }
    public function setnum_tel($num_tel){
        $this->num_tel = $num_tel;
    }
    public function setnbr_point($nbr_point){
        $this->nbr_point = $nbr_point;
    }
    public function setimage($image){
        $this->image = $image;
    }
    public function setemail($email){
        $this->email = $email;
    }
    public function setprivilege($privilege){
        $this->privilege = $privilege;
    }
    public function setusername($username){
        $this->username = $username;
    }
    public function setpassword($password){
        $this->password = $password;
    }

}

?>
