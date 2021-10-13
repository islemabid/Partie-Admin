<?php
class ModelCommande{
	private $data=array();
	


	public function __construct($date=null,  $id_client=null){
		if ( !is_null($date)  && !is_null($id_client) ){
			
			$this->data['date'] =$date;
			$this->data['id_client'] =$id_client;
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
			$stm = $conn->prepare("INSERT INTO commande( date, id_client )
			VALUES (?,?)");
			$stm->execute(
			[//$this->data['ref_commande'] ,
			$this->data['date'] ,
			$this->data['id_client']]);
			return true;
		}catch(PDOException $e ){
			if ($e->getCode() == 2300){
				$message=$e->getMessage();
			}
			return false;
		}
	}
	
	public static function getAllCommande($conn){
		$result=$conn->query("SELECT * FROM commande");
		if(!$result) {
			$erreur=$conn->errorInfo();
		echo "Lecture impossible, code", $conn->errorCode(),$erreur[2];
		}
		else{
			
			return $result->fetchAll(PDO::FETCH_CLASS, 'ModelCommande'); 
		}
	}
	
	public static function getCommandeByref($conn, $ref_commande ){
		$stm = $conn->prepare("SELECT * FROM commande WHERE ref_commande =?");
		$stm->execute([$ref_commande ]);
		return $stm->fetchAll(PDO::FETCH_CLASS, 'ModelCommande');
	}
	public static function updatecommande($conn, $ref_commande , $date, $id_client){
		$stm = $conn->prepare("UPDATE commande SET ref_commande =?,date=?,id_client=? WHERE ref_commande =?");
		$stm->execute([$ref_commande ,$date, $id_client,$ref_commande]);
	}
	public static function deleteCommande($conn, $ref_commande ){
		$stm = $conn->prepare("DELETE FROM commande WHERE ref_commande =?");
		try{
			$stm->execute([$ref_commande ]);
			return true;
		}
		catch(PDOException $e){
			return false;
		}
	}
	
}