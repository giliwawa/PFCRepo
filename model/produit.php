<?php

class produit {

	private $id_produit;
	private $nom;
	private $reference;
	private $categorie;
	private $quantite;
	private $prix;
	private $image;
	private $description;
	
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
			$this->hydrate($args[0]);
		}
	}

	/*getters*/
    public function getid_produit(){
        return $this->id_produit;
    }
    public function getnom(){
        return $this->nom;
    }
    public function getreference(){
        return $this->reference;
    }
    public function getcategorie(){
        return $this->categorie;
    }
    public function getquantite(){
        return $this->quantite;
    }
    public function getprix(){
        return $this->prix;
    }
    public function getimage(){
        return $this->image;
    }
    public function getdescription(){
        return $this->description;
    }

    /*setters*/
    public function setid_produit($id_produit){
        $this->id_produit = $id_produit;
    }
    public function setnom($nom){
        $this->nom = $nom;
    }
    public function setreference($reference){
        $this->reference = $reference;
    }
    public function setcategorie($categorie){
        $this->categorie = $categorie;
    }
    public function setquantite($quantite){
        $this->quantite = $quantite;
    }
    public function setprix($prix){
        $this->prix = $prix;
    }
    public function setimage($image){
        $this->image = $image;
    }
    public function setdescription($description){
        $this->description = $description;
    }
}

?>