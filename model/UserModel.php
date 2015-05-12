<?php
    include_once 'user.php';
    require_once '../Configuration.php';
    require_once '../controller/secure.php';
    
    class UserModel {
        
        
        public function __construct() {
            
        }
        
       public function ajouterUser(){
        $db = new Db();

        $prenom = test_input($_POST['prenom']);
        $nom = test_input($_POST['nom']);
        $sexe = $_POST['sexe'];
        $date_naissance = $_POST['date_naissance'];
        $username = test_input($_POST['username']);
        $password = md5($_POST['password']);
        
        $sql = "INSERT INTO users (prenom, nom, sexe, date_naissance, username, password ) "
                . "VALUES ('".$prenom."','".$nom."','".$sexe."','".$date_naissance."','".$username."','".$password."')";
        
        $db-> query($sql);
    } 

    public function ajouterAdminUser(){
        $db = new Db();

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $sexe = $_POST['sexe'];
        $date_naissance = $_POST['date_naissance'];
        $adresse = $_POST['adresse'];
        $CIN = $_POST['CIN'];
        $num_tel = $_POST['num_tel'];
        $nbr_point = $_POST['nbr_point'];
        $email = $_POST['email'];
        $privilege = $_POST['privilege'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO users (prenom, nom, sexe, date_naissance, adresse, CIN, num_tel, nbr_point, email, privilege, username, password ) "
                . "VALUES ('".$prenom."','".$nom."','".$sexe."','".$date_naissance."','".$adresse."','".$CIN."','".$num_tel."','".$nbr_point."','".$email."','".$privilege."','".$username."','".$password."')";
        
        $db-> query($sql);
    }        

    public function rechercheuser($rech){
        $bdd = new Db();
        $tableau = array();
        $query = "SELECT * FROM users WHERE prenom like '%$rech%' or nom like '%$rech%' or sexe like '%$rech%' or date_naissance like '%$rech%' or adresse like '%$rech%' or CIN like '%$rech%' or num_tel like '%$rech%' or nbr_point like '%$rech%' or email like '%$rech%' or privilege like '%$rech%' or username like '%$rech%' or password like '%$rech%' ";
        $resultat = $bdd->query($query) ;
            if (!$resultat) {
                throw new Exception("Database Error [{$bdd->error()}] {$bdd->error()}");
            }
            $i = 0;
            while($data = $resultat->fetch_assoc())
            {
                $Pr = new user($data);
                $tableau[$i] = $Pr ;
                $i++;   
            }
            return $tableau;
    }

    public function recherche_user_id($id_user){
            $bdd = new Db();
            $tableau = array();
            $query = "SELECT * FROM users WHERE id_user='".$id_user."'";
            $result = $bdd->query($query);
            if (!$result) {
                throw new Exception("Database Error [{$bdd->error()}] {$bdd->error()}");
            }
            $i = 0 ;
            if($result){
                while ($data = $result->fetch_assoc()) {
                    $Tc = new user($data);
                    $tableau[$i] = $Tc;
                    $i++;
                    }
                return $tableau;
                }
            else{
                    return 0;
                }
            
        }

    public function updateuser($id_user,$form){
        $bdd = new Db();

        $query = "UPDATE users SET prenom = '".$form[0]."', nom = '".$form[1]."', date_naissance = '".$form[2]."', adresse = '".$form[3]."', CIN = ".$form[4].", num_tel = ".$form[5].", nbr_point = ".$form[6].", email = '".$form[7]."', privilege = '".$form[8]."', username = '".$form[9]."', password = '".$form[10]."' WHERE id_user =".$id_user;
        $bdd -> query($query);
    }

    public function afficherUser(){
            $bdd = new Db();
            $tableau = array();
            $query = "SELECT * FROM users";
            $resultat = $bdd->query($query) ;
            if (!$resultat) {
                throw new Exception("Database Error [{$bdd->error()}] {$bdd->error()}");
            }
            $i = 0;
            while($data = $resultat->fetch_assoc())
            {
                $Pr = new user($data);
                $tableau[$i] = $Pr ;
                $i++;   
            }
            return $tableau;
        }
        
        public function getlogin($username,$password){

        $db = new Db();
        
        $query = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
        $resultat = $db->query($query) ;
        $i = 0;
        $data = $resultat->fetch_assoc();   
        $Pr = new user($data);
        return $Pr;
    }

    public function deleteUser($id)
        {
            $bdd = new Db();
            $query = "DELETE FROM users WHERE id_user = ".$id;
            $result=$bdd->query($query);
            if (!$result) {
                throw new Exception("Database Error [{$bdd->error()}] {$bdd->error()}");
            }
        }
        
    public function loadiduser($a)
    {
            $bdd = new Db();
            $categories = array();
            $query = "SELECT  from  'id_user' where id_user =$d ";
            $resultat = $bdd->query($query) ;
            return ($resultat);
    }
    public function getUserId($id)
    {
        $bdd = new Db();
        $query = "SELECT * FROM users WHERE id_user=".$id;
        $result = $bdd->query($query);
        $data = $result->fetch_assoc();
        $us = new user($data);
        return $us;
    }
}

    

?>