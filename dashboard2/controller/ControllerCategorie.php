<?php

require_once ('model/ModelCategorie.php'); 
require_once ('model/Model.php');
class ControllerCategorie{
	
	public static function getAll() {
		
		$categories = ModelCategorie::getAllCategories(Model::$pdo);    
		require ('view/categorie/list.php');  
	}
	
	public static function getByref() {
		$pdo = Model::$pdo;
		$code = $_GET['code'];
		$p_tab = ModelCategorie::getcategorieByref($pdo, $code);
		if (count($p_tab) == 0){
			$message='categorie notfound';
			require ('view/categorie/error.php');
		}
		else{
			$p = $p_tab[0];
			require ('view/categorie/detail.php');
		}
		
	}
	
	public static function add() {
		require ('view/categorie/add.php');
	
	}
	
	public static function update() {
		
			require ('view/categorie/update.php');
	
	
	}
	public static function update1() {
		$pdo = Model::$pdo;
		$code = $_POST['code'];
		$nom=$_POST['nom'] ;
		$description=$_POST['description'];
		ModelCategorie::updatecategorie($pdo, $code, $nom, $description);
		 ControllerCategorie::getAll();
	}
		
	
	public static function added() {
		$b=1;
		$p = new  ModelCategorie();
		if (isset($_POST["code"]) && !empty($_POST["code"])){
			$p->code=$_POST["code"];
		}else{$b=0;}

		if (isset($_POST["nom"]) && !empty($_POST["nom"])){
			$p->nom=$_POST["nom"];
		}else{$b=0;}	
		if (isset($_POST["description"]) && !empty($_POST["description"])){
			$p->description=$_POST["description"];
		}else{$b=0;}
		if ($b){
			$status = $p->addCategorie(Model::$pdo);
			if ($status){
				self:: getAll();}
			else{
				
				echo "<script>alert(\"dupliction de code\");</script>";
				//require ('view/categorie/error.php');
				require ('view/categorie/add.php');
			}
		
			
		}
		
	}
	public static function deleteByref() {
		$pdo = Model::$pdo;
		$code = $_GET['code'];
		$status = ModelCategorie::deletecategorie($pdo, $code);
		if (!$status){
			$message=' categorie notfound';
			require ('view/categorie/error.php');
		}
		else{
			ControllerCategorie::getAll();
		}
		
	}
}


?>