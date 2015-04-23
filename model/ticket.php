<?php

class ticket {

	private $id_ticket;
	private $name;
	private $email;
	private $text;
	private $state;

	public function hydrate(array $data)
	{
		foreach ($dara as $key => $value) {
			$method = 'set'.ucfirst($key);
			if (method_exists($this,$method)) {
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
	public function getid_ticket(){
		return $this->id_ticket;
	}
	public function getname(){
		return $this->nom;
	}
	public function getemail(){
		return $this->email;
	}
	public function gettext(){
		return $this->text;
	}
	public function getstate(){
		return $this->state;
	}

	/*setters*/
	public function setid_ticket($id_ticket)
	{
		$this->id_ticket = $id_ticket;
	}
	public function setname($name)
	{
		$this->nom=$name;
	}
	public function setemail($email)
	{
		$this->email=$email;
	}
	public function settext($text)
	{
		$this->text=$text;
	}
	public function setstate($state)
	{
		$this->state=$state;
	}
}
?>