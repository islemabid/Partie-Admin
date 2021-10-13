<?php
require_once ('model/ModelProduit.php'); 
require_once ('model/ModelCategorie.php'); 
require_once ('model/Model.php');


class ControllerProduit{
	
	public static function getAll() {
		
		$produits = ModelProduit::getAllProduits(Model::$pdo);  
		$categories=ModelCategorie::getAllcategories(Model::$pdo); 
		require ('view/produit/list.php');  
	}
	
	public static function getByref() {
		$pdo = Model::$pdo;
		$reference = $_GET['reference'];
		$p_tab = ModelProduit::getProduitByref($pdo, $reference);
		if (count($p_tab) == 0){
			$message='prodnotfound';
			require ('view/produit/error.php');
		}
		else{
			$p = $p_tab[0];
			require ('view/produit/detailprod.php');
		}
		
	}
	public static function getBycategorie() {
		$pdo = Model::$pdo;
		$code= $_GET['code'];
		$produits = ModelProduit::getbycategorie($pdo, $code);
		if (count($produits) == 0){
			$message='prodnotfound';
			require ('view/produit/error.php');
		}
		else{
		
			require ('view/produit/listbycode.php');
		}
		
	}
	
	public static function add() {
		require ('view/produit/addproduit.php');
	
	}
	
	public static function update() {
		
			require ('view/produit/update.php');
	
	
	}
	public static function update1() {
		$pdo = Model::$pdo;
		$reference = $_POST['reference'];
		$designation=$_POST['designation'] ;
		$qte=$_POST['qte'];
		$prix=$_POST['prix'];
		move_uploaded_file($_FILES["photo"]["tmp_name"],"uploads/products//".$_FILES["photo"]["name"]); 
		$photo=$_FILES["photo"]["name"];
		copy("uploads/products//".$_FILES["photo"]["name"],"C:/wamp64/www/partie client/Template Main/uploads/products//"
.$_FILES["photo"]["name"]);
	     $promotion=$_POST['promotion'];
		$tva=$_POST['tva'];
		 $categorie=$_POST['categorie']; 
		 $date=$_POST['date'];
	
		 ModelProduit::updateprod($pdo, $reference, $designation, $qte, $prix, 
		 $photo, $promotion,$tva, $categorie,$date);
		 ControllerProduit::getAll();
	}
		
	
	public static function added() {
		$b=1;
		$p = new ModelProduit();
		if($_SERVER['REQUEST_METHOD']=='POST'){
 
       if (isset($_POST["reference"]) && !empty($_POST["reference"])){
			$p->reference=$_POST["reference"];
		}else{$b=0;}	
		if (isset($_POST["designation"]) && !empty($_POST["designation"])){
			$p->designation=$_POST["designation"];
		}else{$b=0;}	
		if (isset($_POST["qte"]) && !empty($_POST["qte"])){
			$p->qte=$_POST["qte"];
		}else{$b=0;}
	
		if (isset($_POST["prix"]) && !empty($_POST["prix"])){
			$p->prix=$_POST['prix'];
		}else{$b=0;}
		 
	move_uploaded_file($_FILES["photo"]["tmp_name"],"uploads/products//".$_FILES["photo"]["name"]);

copy("uploads/products//".$_FILES["photo"]["name"],"C:/wamp64/www/partie client/Template Main/uploads/products//"
.$_FILES["photo"]["name"]);

	
		 if (isset($_FILES["photo"]["name"])){
	        $p->photo=$_FILES["photo"]["name"];
		}else{$b=0;}	
		
	  	if (isset($_POST["promotion"]) ){
			$p->promotion=$_POST["promotion"];
		}else{$b=0;}
		if (isset($_POST["tva"])){
			$p->tva=$_POST["tva"];
		}else{$b=0;}
		if (isset($_POST["categorie"]) && !empty($_POST["categorie"])){
			$p->categorie=$_POST['categorie'];
		}else{$b=0;}
		if (isset($_POST["date"]) && !empty($_POST["date"])){
			$p->date=$_POST['date'];
		}else{$b=0;}
		}
	
		if ($b){
			$status = $p->addProduit(Model::$pdo);
			if ($status){
				self:: getAll();}
			else{
				echo "<script>alert(\" duplication de ref_produit or categorie incorrect!\");</script>";
				require ('view/produit/addproduit.php');
				
			}
		}
		
			
		
		
	
}

	public static function deleteByref() {
		$pdo = Model::$pdo;
		$reference = $_GET['reference'];
		$status = ModelProduit::deleteProduit($pdo, $reference);
		if (!$status){
			$message='prodnotfound';
			require ('view/produit/error.php');
		}
		else{
			ControllerProduit::getAll();
		}
		
	}
}


?>