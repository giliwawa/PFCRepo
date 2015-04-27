<?php

class user {

    public function hydrate(array $data){
        $i = 0;
        //echo json_encode($data);

        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this,$method)) {
                $this->$method($value);
                //echo $key." ";
            }
            else
            {
                //echo '<br>'.$key.' does not exist i= '.$i;
            }
        }
    }
    public function __construct()
    {
        $ctp = func_num_args();
        $args= func_get_args();
        if ($ctp == 0) {
        }
        else{
            $this->hydrate($args[0]);
        }
    }    

    private $id_user;
    private $prenom;
    private $nom;
    private $sexe;
    private $date_naissance;
    private $adresse;
    private $cin;
    private $num_tel;
    private $nbr_point;
    private $image;
    private $email;
    private $privilege;
    private $username;
    private $password;
    
    /*getters*/
    public function getid_user(){
        return $this->id_user;
    }
    public function getprenom(){
        return $this->prenom;
    }
    public function getnom(){
        return $this->nom;
    }
    public function getsexe(){
        return $this->sexe;
    }
    public function getdate_naissance(){
        return $this->date_naissance;
    }
    public function getadresse(){
        return $this->adresse;
    }
    public function getcin(){
        return $this->cin;
    }
    public function getnum_tel(){
        return $this->num_tel;
    }
    public function getnbr_point(){
        return $this->nbr_point;
    }
    public function getimage(){
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
    public function getpassword(){
        return $this->password;
    }
    /*setters*/
    public function setId_user($id_user){
        $this->id_user = $id_user;
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
    public function setDate_naissance($date_naissance){
        $this->date_naissance = $date_naissance;
    }
    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }
    public function setCin($cin){
        $this->cin = $cin;
    }
    public function setNum_tel($num_tel){
        $this->num_tel = $num_tel;
    }
    public function setNbr_point($nbr_point){
        $this->nbr_point = $nbr_point;
    }
    public function setImage($image){
        $this->image = $image;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPrivilege($privilege){
        $this->privilege = $privilege;
    }
    public function setUsername($username){
        $this->username = $username;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
}

?>
