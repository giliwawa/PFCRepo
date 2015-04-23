<?php

class produit {

        private $id_favoris;
	private $id_produit;
	private $id_user;
	
	public function hydrate(array $data)
	{
		foreach ($data as $key => $value) {
			$method = 'set'.ucfirst($key);
			if (method_exists($this, $method)) {
				$this->$method($value);
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
			$this->hydrate([0]);
		}
	}

	/*getters*/
    public function getid_favoris(){
        return $this->id_favoris;
    }
    public function getid_produit(){
        return $this->id_produit;
    }
    public function getid_user(){
        return $this->id_user;
    }
    

    /*setters*/
    public function setid_favoris($id_favoris){
        $this->id_favoris = $id_favoris;
    }
    public function setid_produit($id_produit){
        $this->id_produit = $id_produit;
    }
    public function setid_user($id_user){
        $this->id_user = $id_user;
    }
    
}

?>