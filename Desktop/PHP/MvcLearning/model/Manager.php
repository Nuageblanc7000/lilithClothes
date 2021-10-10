<?php
namespace App;
use \PDO;
/**
 * class permettant l'accès à la bd.
 */
class Manager {
    private $db_host='localhost';
    private $db_name ='lilith';
    private $db_user='root';
    private $db_pass ='';

    private $bdd;
    
    /**
     * method permettant la connection à la base de donnée.
     *
     * @return string 
     */
    protected function dbConnect(){
        if($this->bdd===NULL){
            try{
                $this -> bdd = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name.';
                charset=utf8',$this->db_user,$this->db_pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            }
            catch(Exception $e){
                die('erreur'.$e -> getMessage());
            }
        }
        return  $this->bdd;
    }
}
    
