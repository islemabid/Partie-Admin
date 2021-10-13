<?php
require_once ('model/Modelclient.php'); 
require_once ('model/Model.php');
class Controllerclient{
	
	public static function getAll() {
		
		$clients = Modelclient::getAllclients(Model::$pdo);    
		require ('view/client/list.php');  
	}
	
	public static function getBypseudo() {
		$pdo = Model::$pdo;
		$pseudo = $_GET['pseudo'];
		$c_tab = Modelclient::getclientBypseudo($pdo, $pseudo);
		if (count($c_tab) == 0){
			$message='client not founed';
			require ('view/client/error.php');
		}
		else{
			$c= $c_tab[0];
			require ('view/client/detailclient.php');
		}
		
	}
	
	public static function add() {
		require ('view/client/addclient.php');
	
	}
	
	public static function update() {
		
			require ('view/client/update.php');
	
	
	}
	public static function update1() {
		$pdo = Model::$pdo;
		$pseudo = $_POST['pseudo'];
		$nom=$_POST['nom'] ;
		$prenom=$_POST['prenom'];
		$email=$_POST['email']; 
	    $telephone=$_POST['telephone']; 
	    $adresse=$_POST['adresse'];
		$genre=$_POST['genre'];
		 $mp=$_POST['mp']; 
        ModelClient::updateclient($pdo, $pseudo, $nom, $prenom, $email, 
		 $telephone, $adresse,$genre, $mp);
		 Controllerclient::getAll();
	}
		
	
	public static function added() {
		$b=1;
		$c = new ModelClient();
		if (isset($_POST["pseudo"]) ){
			$c->pseudo=$_POST["pseudo"];
		}else{$b=0;}	
		if (isset($_POST["nom"]) ){
			$c->nom=$_POST["nom"];
		}else{$b=0;}	
		if (isset($_POST["prenom"]) ){
			$c->prenom=$_POST["prenom"];
		}else{$b=0;}
	
		if (isset($_POST["email"]) ){
			$c->email=$_POST["email"];
		}else{$b=0;}	
		
		if (isset($_POST["telephone"]) ){
			$c->telephone=$_POST["telephone"];
		}else{$b=0;}
		if (isset($_POST["adresse"]) ){
			$c->adresse=$_POST["adresse"];
		}else{$b=0;}
		if (isset($_POST["genre"]) ){
			$c->genre=$_POST["genre"];
		}else{$b=0;}
		if (isset($_POST["mp"]) ){
			$c->mp=$_POST["mp"];
	
		}else{$b=0;}
		if ($b){
			$status = $c->addclient(Model::$pdo);
			if ($status){
				Controllerclient:: getAll();}
			else{
				echo "<script>alert(\"dupliction de code\");</script>";
			
				require ('view/client/addclient.php');
			}
		
			
		}
		
	}

	public static function deleteBypseudo() {
		$pdo = Model::$pdo;
		$pseudo = $_GET['pseudo'];
		$status = Modelclient::deleteclient($pdo, $pseudo);
		if (!$status){
			$message='client not founded';
			require ('view/client/error.php');
		}
		else{
			Controllerclient::getAll();
		}
		
	}
}

?>