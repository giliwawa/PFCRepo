<?php

require_once("../model/UserModel.php");
$id_user = htmlspecialchars($_GET["IdUser"]);
$UserModel = new UserModel();
$listeU=$UserModel->recherche_user_id($id_user);
echo "hello";

foreach ($listeU as $user) :
?>



<div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="<?php echo $user->getUsername() ;?>" name="username">
                            <label for="icon_prefix"></label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="password" value="<?php echo $user->getPassword() ;?>" name="password">
                            <label for="icon_prefix"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="<?php echo $user->getPrenom() ;?>" name="prenom">
                            <label for="icon_prefix"></label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="<?php echo $user->getNom() ;?>" name="nom">
                            <label for="icon_prefix"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="date" class="datepicker" value="<?php echo $user->getDate_naissance() ;?>" name="date_naissance">
                            <label for="icon_prefix"></label>
                        </div>
                        <div class="input-field col s6 Gender">
                            <input name="sexe" type="radio" id="male" value="<?php echo $user->getSexe() ;?>"/>
                            <label for="male">Male</label>
                            <input name="sexe" type="radio" id="female" value="<?php echo $user->getSexe() ;?>"/>
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="<?php echo $user->getAdresse() ;?>" name="adresse">
                            <label for="icon_prefix"></label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="<?php echo $user->getCIN() ;?>" name="CIN">
                            <label for="icon_prefix"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="<?php echo $user->getNum_tel() ;?>" name="num_tel">
                            <label for="icon_prefix"></label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="<?php echo $user->getNbr_point() ;?>" name="nbr_point">
                            <label for="icon_prefix"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="<?php echo $user->getEmail() ;?>" name="email">
                            <label for="icon_prefix"></label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="<?php echo $user->getPrivilege() ;?>" name="privilege">
                            <label for="icon_prefix"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                             <a class="btn waves-effect waves-light darken-3" id="update" onclick="loadupdateUser();">Update</a>
                        </div>
                    </div>
    	</div>

<?php
    endforeach;

?>