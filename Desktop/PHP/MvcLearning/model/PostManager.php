<?php
namespace App;
use \PDO;
/**
 * class permettant l'accès au différentes method qui font appel à la bd
 */
class PostManager extends Manager{
    /**
     * method view all clothes
     *
     * @return $datas
     */
public function getPost(){
    $db = $this -> dbConnect();
    $req = $db->query('SELECT * FROM vetement');
    $datas = $req->fetchAll(PDO::FETCH_OBJ);
    $req ->closeCursor();
    return $datas;
}
/**
 * Undocumented function
 *
 * @param string $nameV
 * @param string $vetI
 * @param float $priceV
 * @return $affectedLines
 */
public function setPost($nameV, $vetI, $priceV){
    $dbs = $this -> dbConnect();
    $stmt = ("INSERT INTO vetement(name_vet,vet_img,price_vet)
    VALUES(?,?,?)");
    $insert = $dbs->prepare($stmt);
    $affectedLines = $insert -> execute([$nameV,$vetI,$priceV]);
    $insert -> closeCursor();
    return $affectedLines;
}

}