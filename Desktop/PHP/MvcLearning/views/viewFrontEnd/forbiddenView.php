<?php header('HTTP/1.0 403 Forbidden');?>
<?php $title="Page 403";?>
<?php ob_start();?>
<h1>Erreur 403</h1>
<p>Vous n'avez pas accès à cette ressource</p>
<?php $content = ob_get_clean(); ?>
<?php require "template.php";?>