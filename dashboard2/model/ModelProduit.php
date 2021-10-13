<?php
class ModelProduit{
	private $data=array();
	


	public function __construct($reference=null,$designation=null,  $qte=null,$prix=null,
	 $photo=null,$promotion=null,$tva=null,$categorie=null,$date=null){
		if ( !is_null($reference)&&!is_null($designation)  && !is_null($qte)&& !is_null($prix) 
                  &&!is_null($photo)&& !is_null($promotion)&&!is_null($tva)
	&& !is_null($categorie)	&& !is_null($date)){
			$this->data['reference'] =$reference;
			$this->data['designation'] =$designation;
			$this->data['qte'] =$qte;
			$this->data['prix']=$prix;
			$this->data['photo'] =$photo;
			$this->data['promotion']=$promotion;
			$this->data['tva']=$tva;
			$this->data['categorie']=$categorie;
			$this->data['date']=$date;
	
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
	
	public function addProduit($conn){
		try{
			$stm = $conn->prepare("INSERT INTO produit(reference,designation, qte, prix, 
			photo,promotion,tva, categorie,date)
			VALUES (?,?,?,?,?,?,?,?,?)");
			$stm->execute([
			$this->data['reference'],	
            $this->data['designation'],
			$this->data['qte'] ,
			$this->data['prix'],
			$this->data['photo'] ,
			$this->data['promotion'] ,
			$this->data['tva'] ,
			$this->data['categorie'],
			$this->data['date'] 
		 ]);
			return true;
		}catch(PDOException $e ){
			if ($e->getCode() == 2300){
				$message=$e->getMessage();
			}
			return false;
		}
	}
	
	public static function getAllProduits($conn){
		$result=$conn->query("SELECT * FROM produit");
		if(!$result) {
			$erreur=$conn->errorInfo();
		echo "Lecture impossible, code", $conn->errorCode(),$erreur[2];
		}
		else{
			
			return $result->fetchAll(PDO::FETCH_CLASS, 'ModelProduit'); 
		}
	}
	
	public static function getProduitByref($conn, $reference){
		$stm = $conn->prepare("SELECT * FROM produit WHERE reference=?");
		$stm->execute([$reference]);
		return $stm->fetchAll(PDO::FETCH_CLASS, 'ModelProduit');
	}
		
	public static function getbycategorie($conn, $code){
		$stm = $conn->prepare("SELECT * FROM produit WHERE categorie=?");
		$stm->execute([$code]);
		return $stm->fetchAll(PDO::FETCH_CLASS, 'ModelProduit');
	}
	public static function updateprod($conn, $reference, $designation, $qte, $prix, 
	$photo, $promotion,$tva, $categorie,$date){
		$stm = $conn->prepare("UPDATE produit SET
		reference=?,designation=?,qte=?,prix=?,photo=?,promotion=?,tva=?,
		  categorie=? , date=? WHERE reference=?");
		$stm->execute([ $reference,$designation, $qte, $prix, 
		$photo, $promotion,$tva, $categorie,$date,$reference]);
	}
	public static function deleteProduit($conn, $reference){
		$stm = $conn->prepare("DELETE FROM produit WHERE reference=?");
		try{
			$stm->execute([$reference]);
			return true;
		}
		catch(PDOException $e){
			return false;
		}
	}
	
}