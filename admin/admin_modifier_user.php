<form class="col s12" action="../controller/modifieruserController.php" method="POST">
	<div class="row">
        <div class="input-field col s6">
            <input id="icon_prefix" type="text" class="validate" name="search">
            <label for="icon_prefix">Search</label>
        </div>
        <div class="col s12">
            <button class="btn waves-effect waves-light darken-3" type="submit">Search</button>
        </div>
</form>
<form>
	<div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="username" name="username">
                            <label for="icon_prefix">Username</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="password" value="password" name="password">
                            <label for="icon_prefix">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="prenom" name="prenom">
                            <label for="icon_prefix">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="nom" name="nom">
                            <label for="icon_prefix">Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="date" class="datepicker" value="date_naissance" name="date_naissance">
                            <label for="icon_prefix"></label>
                        </div>
                        <div class="input-field col s6 Gender">
                            <input name="sexe" type="radio" id="male" value="male"/>
                            <label for="male">Male</label>
                            <input name="sexe" type="radio" id="female" value="female"/>
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="adresse" name="adresse">
                            <label for="icon_prefix">Adresse</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="password" value="CIN" name="CIN">
                            <label for="icon_prefix">CIN</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="num_tel" name="num_tel">
                            <label for="icon_prefix">Num° telephone</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="password" value="nbr_point" name="nbr_point">
                            <label for="icon_prefix">Points</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" value="email" name="email">
                            <label for="icon_prefix">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="password" value="privilege" name="privilege">
                            <label for="icon_prefix">Pivilege</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button class="btn waves-effect waves-light darken-3" type="submit">UpDate</button>
                        </div>
                    </div>
    	</div>
</form>