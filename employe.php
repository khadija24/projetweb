<?PHP
class ReclamationRendezvous{
	private $Nom;
	private $Prenom;
	private $Email;
	private $Adresse;
	private $Gouvernorat;
	private $Ville;
	private $CodePostal;
	private $Telephone;
	function __construct($Nom,$Prenom,$Email,$Adresse,$Gouvernorat,$Ville,$CodePostal,$Telephone){
		$this->Nom=$Nom;
		$this->Prenom=$Prenom;
		$this->Email=$Email;
		$this->Adresse=$Adresse;
		$this->Gouvernorat=$Gouvernorat;
		$this->Ville=$Ville;
		$this->CodePostal=$CodePostal;
		$this->Telephone=$Telephone;


	}
	
	function getNom(){
		return $this->Nom;
	}
	function getPrenom(){
		return $this->Prenom;
	}
	function getEmail(){
		return $this->Email;
	}
	function getAdresse(){
		return $this->Adresse;
	}
	function getGouvernorat(){
		return $this->Gouvernorat;
	}
	function getVille(){
		return $this->Ville;
	}function getCodePostal(){
		return $this->CodePostal;
	}function getTelephone(){
		return $this->Telephone;
	}


	function setNom($Nom){
		$this->Nom=$Nom;
	}
	function setPrenom($Prenom){
		$this->Prenom=$Prenom;
	}
	function setEmail($Email){
		$this->Email=$Email;
	}
	function setAdresse($Adresse){
		$this->Adresse=$Adresse;
	}
	function setGouvernorat($Gouvernorat){
		$this->Gouvernorat=$Gouvernorat;
	}
	function setVille($Ville){
		$this->Ville=$Ville;
	}
	function setCodePostal($CodePostal){
		$this->CodePostal=$CodePostal;
	}
	function setTelephone($Telephone){
		$this->Telephone=$Telephone;
	}
	
}

?>