<?php 
class ModelHome{
    public static function getProfil($conn, $username,$password,$photo){
		$stm = $conn->prepare("SELECT * FROM admin WHERE username=? AND password=? AND photo =?");
		$stm->execute([$username,$password,$photo]);
		return $stm->fetchAll(PDO::FETCH_CLASS, 'ModelHome');
	}
	 public static function affiche($conn){
        $category = $conn->query("SELECT COUNT(*) as C FROM categorie");
        $category1=$category->fetch();
        $produits = $conn->query("SELECT COUNT(*) as p FROM produit");
        $produits1 = $produits->fetch();
        $ligne = $conn->query("SELECT COUNT(*) as l FROM lignedecommande");
        $lignes1 = $ligne->fetch();
        $commande = $conn->query("SELECT COUNT(*) as c FROM commande");
         $commande1 = $commande->fetch();
         $clients =$conn->query("SELECT COUNT(*) as c FROM client");
        $clients1=$clients->fetch();

    
        $affiche = array(
            'category' =>$category1['C'],
            'products' =>$produits1['p'],
            'ligne' =>$lignes1['l'],
            'commande' =>$commande1['c'],
            'clients' => $clients1['c']
        );
        return $affiche;
   }

}
?>