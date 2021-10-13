<?php
require_once ('model/ModelLignecommande.php'); 
require_once ('model/Model.php');
class ControllerLignecommande{
	
	public static function getAll() {
		
		$lignecommande = ModelLignecommande::getAllCommande(Model::$pdo);    
		require ('view/lignecommande/list.php');  
	}
	
	public static function getByref() {
		$pdo = Model::$pdo;
		$ref_commande = $_GET['ref_commande'];
		$p_tab = ModelLigneCommande::getCommandeByref($pdo, $ref_commande);
		if (count($p_tab) == 0){
			$message='prodnotfound';
			require ('view/lignecommande/error.php');
		}
		else{
			$p = $p_tab[0];
			require ('view/lignecommande/detail.php');
		}
		
	}
	
	public static function add() {
		require ('view/lignecommande/addcommande.php');
	
	}
	
	public static function update() {
		
			require ('view/lignecommande/update.php');
	
	
	}
	public static function update1() {
		$pdo = Model::$pdo;
	
		$qte  =$_POST['qte'];
		$prix  =$_POST['prix'];
		$ref_commande=$_POST['ref_commande'];
		$ref_produit=$_POST['ref_produit'];
	  ModelLignecommande::updatecommande($pdo, $ref_commande,$ref_produit, $qte,$prix);
		ControllerLignecommande::getAll();
	}
		
	
	public static function added() {
		$b=1;
		$p = new ModelLigneCommande();
		if (isset($_POST["ref_commande"]) && !empty($_POST["ref_commande"])){
			$p->ref_commande=$_POST["ref_commande"];
		}else{$b=0;}	
		if (isset($_POST["ref_produit"]) && !empty($_POST["ref_produit"])){
			$p->ref_produit=$_POST["ref_produit"];
		}else{$b=0;}	
		if (isset($_POST["qte"]) && !empty($_POST["qte"])){
			$p->qte=$_POST["qte"];
		}else{$b=0;}
		if (isset($_POST["prix"]) && !empty($_POST["prix"])){
			$p->prix=$_POST["prix"];
		}else{$b=0;}
	if ($b){
			$status = $p->addCommande(Model::$pdo);
			if ($status){
			   self:: getAll();
			
			}
			else{
				echo "<script>alert(\" id_produit or id_commande incorrect!\");</script>";
				require ('view/lignecommande/addcommande.php');
			}
		
			
		}
		
	}

	public static function deleteByref() {
		$pdo = Model::$pdo;
		$ref_commande=$_GET['ref_commande'];
		$status = ModelLignecommande::deleteCommande($pdo, $ref_commande);
		if (!$status){
			$message='commandenotfound';
			require ('view/lignecommande/error.php');
		}
		else{
			ControllerLignecommande::getAll();
		}
		
	}
}

?>