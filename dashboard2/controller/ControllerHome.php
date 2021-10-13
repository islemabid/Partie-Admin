<?php  
require_once ('model/ModelHome.php'); 
require_once ('model/Model.php');
session_start();


class ControllerHome{
    
 
	public static function getAll() {
		
  
        require ('view/Home/Login_v3/login.php');  
   
    }
	
public static function verif() {  
    $pdo = Model::$pdo;
    $username =$_POST["username"] ;
    $password=$_POST["pass"];
    $photo="dashboard2\uploads\profil\islem.jpg";
    $p=ModelHome::getProfil($pdo, $username,$password,$photo);
    if (count($p) == 0){
        $message=' profil notfound';
        require ('Login_v3/login.php');
    }
    else{
        
        if($_POST['remember-me']==true){
            //86400 = 1 day (86400*30 = 1 month)
             $exp = time() + (86400 * 30); 
          //setting cookie variable
          setcookie('user_name',$_POST["username"] , $exp);
          setcookie('user_pass',$_POST["pass"] , $exp);}
      
      $_SESSION['username']=$_POST["username"] ;
      ControllerHome::get();
        ;}
       
    }
    public static function get(){
        $pdo = Model::$pdo;
        $affiche=ModelHome::affiche($pdo);

        require("view/home/list.php");
    }
} 
  


?>