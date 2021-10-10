<?php
namespace App;
require('controllers/HomeController.php');
?>
<?php//rooter du site?>

<?php 
if(isset($_GET['action'])){
if($_GET['action']=='add'){
    if(isset($_POST['nameV'])){
        $nameV=htmlspecialchars($_POST['nameV']);
        $vetI=htmlspecialchars($_POST['vetI']);
        $priceV=htmlspecialchars($_POST['priceV']);
        HomeController::addPosts($nameV,$vetI,$priceV);
    }else{
    HomeController::forbidden();
    }
}elseif($_GET['action']=='view'){
require 'views/viewFrontEnd/addPostView.php';
}

else{
    HomeController::listPosts();
}
}else{
    HomeController::listPosts();
}
?>