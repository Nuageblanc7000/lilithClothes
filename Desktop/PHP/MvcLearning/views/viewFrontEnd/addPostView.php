<?php $title="nouvelle article"?>

<?php ob_start();?>
<h1>Ajouter un article</h1>

<form action="index.php?action=add" method="POST">
    <input type="text" name="nameV">
    <input type="text" name="vetI">
    <input type="number"  name="priceV">
    <button type="submit">Ajouter</button>
</form>
<?php $content=ob_get_clean();?>
<?php require "template.php"?>