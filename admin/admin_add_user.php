<form class="col s12" action="../controller/adduserController.php" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" name="username">
                            <label for="icon_prefix">Username</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="password" name="password">
                            <label for="icon_prefix">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" name="prenom">
                            <label for="icon_prefix">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" name="nom">
                            <label for="icon_prefix">Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="date" class="datepicker" name="date_naissance">
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
                            <input id="icon_prefix" type="text" class="validate" name="adresse">
                            <label for="icon_prefix">Adresse</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="password" name="CIN">
                            <label for="icon_prefix">CIN</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" name="num_tel">
                            <label for="icon_prefix">Num° telephone</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="password" name="nbr_point">
                            <label for="icon_prefix">Points</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" name="email">
                            <label for="icon_prefix">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="password" name="privilege">
                            <label for="icon_prefix">Pivilege</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button class="btn waves-effect waves-light darken-3" type="submit">Add</button>
                        </div>
                    </div>
                    
                    
                    
                </form>