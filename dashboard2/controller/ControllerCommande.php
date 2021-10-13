<?php
require_once ('model/ModelCommande.php'); 
require_once ('model/Model.php');
class ControllerCommande{
	
	public static function getAll() {
		
		$commande = ModelCommande::getAllCommande(Model::$pdo);    
		require ('view/commande/list.php');  
	}
	
	public static function getByref() {
		$pdo = Model::$pdo;
		$ref_commande = $_GET['ref_commande'];
		$p_tab = ModelCommande::getCommandeByref($pdo, $ref_commande);
		if (count($p_tab) == 0){
			$message='prodnotfound';
			require ('view/commande/error.php');
		}
		else{
			$p = $p_tab[0];
			require ('view/commande/detail.php');
		}
		
	}
	
	public static function add() {
		require ('view/commande/addcommande.php');
	
	}
	
	public static function update() {
		
			require ('view/commande/update.php');
	
	
	}
	public static function update1() {
		$pdo = Model::$pdo;
		$ref_commande = $_POST['ref_commande'];
		$date=$_POST['date'] ;
		$id_client =$_POST['id_client'];
	    ModelCommande::updatecommande($pdo, $ref_commande, $date, $id_client);
		ControllerCommande::getAll();
	
	}
		
	
	public static function added() {
		$b=1;
		$p = new ModelCommande();
		//if (isset($_POST["ref_commande"]) && !empty($_POST["ref_commande"])){
			//$p->ref_commande=$_POST["ref_commande"];
		//}else{$b=0;}	
		if (isset($_POST["date"]) && !empty($_POST["date"])){
			$p->date=$_POST["date"];
		}else{$b=0;}	
		if (isset($_POST["id_client"]) && !empty($_POST["id_client"])){
			$p->id_client=$_POST["id_client"];
		}else{$b=0;}
	if ($b){
			$status = $p->addCommande(Model::$pdo);
			if ($status){
				self:: getAll();}
			else{
				echo "<script>alert(\" id_client incorrect !\");</script>";
				require ('view/commande/addcommande.php');
			}
		
			
		}
		
	}

	public static function deleteByref() {
		$pdo = Model::$pdo;
		$ref_commande=$_GET['ref_commande'];
		$status = ModelCommande::deleteCommande($pdo, $ref_commande);
		if (!$status){
			$message='commandenotfound';
			require ('view/commande/error.php');
		}
		else{
			ControllerCommande::getAll();
		}
		
	}
}

?>