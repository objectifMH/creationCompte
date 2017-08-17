<?php

class Utilisateur{
	
	private $prenom;
	private $nom;
	private $username;
	private $email;
	private $mdp;

public  function  __construct($prenom,$nom,$username,$email,$mdp){
	$this->prenom = $prenom;
	$this->nom = $nom;
	$this->username = $username;
	$this->email = $email;
	$this->mdp = $mdp;
 	}

public function setPrenom($prenom){
	$this->prenom = $prenom;
}
public function getPrenom(){
	return $this->prenom;
}

public function setNom($nom){
	$this->nom = $nom;
}
public function getNom(){
	return $this->nom;
}

public function setUsername($username){
	$this->username = $username;
}
public function getUsername(){
	return $this->username;
}

public function setEmail($email){
	$this->email = $email;
}
public function getEmail(){
	return $this->email;
}

public function setMdp($mdp){
	$this->mdp = $mdp;
}
public function getMdp(){
	return $this->mdp;
}

public function __tostring(){
		return " ".$this->prenom." ".$this->nom." ".$this->username." ".$this->email." [".$this->mdp."] <br>";
	}

}


?>