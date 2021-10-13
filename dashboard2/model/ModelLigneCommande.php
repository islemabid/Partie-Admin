<?php
class ModelLigneCommande{
	private $data=array();
	


	public function __construct($ref_commande =null,$ref_produit=null,$qte=null,$prix=null){
		if (!is_null($ref_commande )&&!is_null($ref_produit)&&!is_null($qte)&&!is_null($prix)){
			$this->data['ref_commande'] =$ref_commande;
			$this->data['ref_produit'] =$ref_produit;
			$this->data['qte'] =$qte;
			$this->data['prix'] =$prix;
	}
	}
	public function __get($attr){
		if (!isset($this->data[$attr]))
			return "erreur";
		else return ($this->data[$attr]);
	}
	
	public function __set($attr,$value) {
		$this->data[$attr] = $value; 
	}
	
	public function addCommande($conn){
		try{
			$stm = $conn->prepare("INSERT INTO lignedecommande(ref_commande, ref_produit, qte, prix)
			VALUES (?,?,?,?)");
			$stm->execute(
			[$this->data['ref_commande'] ,
			$this->data['ref_produit'] ,
			$this->data['qte'],	
			$this->data['prix']
			]);
			return true;
		}catch(PDOException $e ){
			if ($e->getCode() == 2300){
				$message=$e->getMessage();
			}
			return false;
		}
	}
	
	public static function getAllCommande($conn){
		$result=$conn->query("SELECT * FROM lignedecommande");
		if(!$result) {
			$erreur=$conn->errorInfo();
		echo "Lecture impossible, code", $conn->errorCode(),$erreur[2];
		}
		else{
			
			return $result->fetchAll(PDO::FETCH_CLASS, 'ModelLigneCommande'); 
		}
	}
	
	public static function getCommandeByref($conn, $ref_commande ){
		$stm = $conn->prepare("SELECT * FROM lignedecommande WHERE ref_commande =?");
		$stm->execute([$ref_commande ]);
		return $stm->fetchAll(PDO::FETCH_CLASS, 'ModelLigneCommande');
	}

	public static function updatecommande($conn, $ref_commande , $ref_produit, $qte,$prix){
		$stm = $conn->prepare("UPDATE lignedecommande SET ref_commande =? ,ref_produit=? , qte=? , prix=? WHERE ref_commande =? AND  ref_produit=?");
		$stm->execute([$ref_commande,$ref_produit,$qte,$prix,$ref_commande,$ref_produit]);
	}
	public static function deleteCommande($conn, $ref_commande ){
		$stm = $conn->prepare("DELETE FROM lignedecommande WHERE ref_commande =?");
		try{
			$stm->execute([$ref_commande ]);
			return true;
		}
		catch(PDOException $e){
			return false;
		}
	}
	
}