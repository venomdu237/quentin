<?PHP
class livraison{
	private $ref;
	private $nom;
	private $prenom;
	private $email;
	private $numtel;
	private $ville;
	private $adresse;
	private $codepostal;
	private $livreur;
	private $priorite;
	
	function __construct($ref,$nom,$prenom,$email,$numtel,$ville,$adresse,$codepostal,$priorite){
		$this->ref=$ref;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->codepostal=$codepostal;
		$this->ville=$ville;
		$this->adresse=$adresse;
		$this->numtel=$numtel;
		$this->email=$email;
		$this->priorite=$priorite;
		
	}
	
	function getRef(){
		return $this->ref;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getAdresse(){
		return $this->adresse;
	}
	function getCodepostal(){
		return $this->codepostal;
	}
	function getVille(){
		return $this->ville;
	}
	function getNumtel(){
		return $this->numtel;
	}
	function getMail(){
		return $this->email;
	}
	function getLivreur(){
		return $this->livreur;
	}
	function getPriorite(){
		return $this->priorite;
	}
	
	
function setRef($ref){
		$this->ref=$ref;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setAdesse($adresse){
		$this->adresse=$adresse;
	}
	function setCodepostal($codepostal){
		$this->codepostal=$codepostal;
	}
	function setVille($ville){
		$this->ville=$ville;
	}
	function setNumtel($numtel){
		$this->numtel=$numtel;
	}
	function setMail($email){
		$this->email=$email;
	}

	function setLivreur($livreur){
		$this->livreur=$livreur;
	}
	
	function setPriorite($priorite){
		$this->priorite=$priorite;
	}
	
	
}

?>