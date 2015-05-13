<?php

require_once("../model/UserModel.php");
$id_user = htmlspecialchars($_GET["IdUser"]);
$UserModel = new UserModel();
$listeU=$UserModel->recherche_user_id($id_user);

foreach ($listeU as $user) :
?>



<div class="row">
                        <div class="input-field col s6">
                            <input id="username" type="text" class="validate" value="<?php echo $user->getUsername() ;?>" name="username">
                            <label for="icon_prefix">Username</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="password" type="text" class="password" value="" name="password">
                            <label for="icon_prefix">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="prenom" type="text" class="validate" value="<?php echo $user->getPrenom() ;?>" name="prenom">
                            <label for="icon_prefix">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="nom" type="text" class="validate" value="<?php echo $user->getNom() ;?>" name="nom">
                            <label for="icon_prefix">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="date-naissance" type="date" class="datepicker" value="<?php echo $user->getDate_naissance() ;?>" name="date_naissance">
                            <label for="icon_prefix">Birth Day</label>
                        </div>
                        <div class="input-field col s6 Gender" >
                            <input name="sexe" type="radio" id="sexe" value="<?php echo $user->getSexe() ;?>"/>
                            <label for="male">Male</label>
                            <input name="sexe" type="radio" id="sexe" value="<?php echo $user->getSexe() ;?>"/>
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="adresse" type="text" class="validate" value="<?php echo $user->getAdresse() ;?>" name="adresse">
                            <label for="icon_prefix">Adress</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="CIN" type="text" class="validate" value="<?php echo $user->getCIN() ;?>" name="CIN">
                            <label for="icon_prefix">CIN</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="num_tel" type="text" class="validate" value="<?php echo $user->getNum_tel() ;?>" name="num_tel">
                            <label for="icon_prefix">Cell Number</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="nbr_point" type="text" class="validate" value="<?php echo $user->getNbr_point() ;?>" name="nbr_point">
                            <label for="icon_prefix">SIPoints</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="email" type="text" class="validate" value="<?php echo $user->getEmail() ;?>" name="email">
                            <label for="icon_prefix">E-mail</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="privilege" type="text" class="validate" value="<?php echo $user->getPrivilege() ;?>" name="privilege">
                            <label for="icon_prefix">Privilege</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                             <a class="btn waves-effect waves-light darken-3" id="update" onclick="loadupdateUser(<?php echo $user->getid_user() ;?>);">Update</a>
                        </div>
                    </div>
    	</div>

<?php
    endforeach;

?>