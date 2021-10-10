<?php
namespace App;
use \Exception;
// on require autoloader pour l'appel des classes)
require ('model/Autoloader.php');
Autoloader::register();
/**
 *  class controller principal
 */
class HomeController{
    /**
     * Undocumented function
     *
     * @return void
     */
public static function listPosts(){ 
$postManager = new PostManager();
$posts =$postManager -> getPost();
require ("views/viewFrontEnd/listPostsView.php");
}
 /**
 * Undocumented function
 *
 * @param string $nameV
 * @param string $vetI
 * @param float $priceV
 * @return void
 */
public static function addPosts($nameV,$vetI,$priceV){ 
    $err=0;
    if(empty($nameV)){
    $err=1;
}else{
    $nameV=htmlspecialchars($nameV);
    $vetI=htmlspecialchars($vetI);
    $priceV=htmlspecialchars($priceV);
}
if($err==0){
    $postManagers = new PostManager();
    $affectedLines = $postManagers -> setPost($nameV,$vetI,$priceV);
    if($affectedLines === false){
        throw new Exception('une erreur est survenue');
    }else{
        header("LOCATION:index.php?action=view&ok&$nameV");
    }
  
    }else{
        header("LOCATION:index.php?action=view&err=$err");
    }
}
public static function forbidden(){
    require("views/viewFrontEnd/forbiddenView.php");
}
}