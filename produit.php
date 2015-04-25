<?php

require 'DBConnect.php';

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
			$this->hydrate([0]);
		}
	}

	/*getters*/
    public function getId_produit(){
        return $this->id_produit;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getReference(){
        return $this->reference;
    }
    public function getCategorie(){
        return $this->categorie;
    }
    public function getQuantite(){
        return $this->quantite;
    }
    public function getPrix(){
        return $this->prix;
    }
    public function getImage(){
        return $this->image;
    }
    public function getDescription(){
        return $this->description;
    }

    /*setters*/
    public function setId($id_produit){
        $this->id_produit = $id_produit;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setReference($reference){
        $this->reference = $reference;
    }
    public function setCategorie($categorie){
        $this->categorie = $categorie;
    }
    public function setQuantite($quantite){
        $this->quantite = $quantite;
    }
    public function setPrix($prix){
        $this->prix = $prix;
    }
    public function setImage($image){
        $this->image = $image;
    }
    public function setDescription($description){
        $this->description = $description;
    }

    /*Cruds*/
    public function consulterProduit()
    {
    	$bdd = new DBConnect('localhost', 'pfc', 'root', '');
    	

    	
    }
}

?>