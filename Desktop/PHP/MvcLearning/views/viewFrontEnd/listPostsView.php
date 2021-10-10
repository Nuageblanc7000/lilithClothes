
<?=$title="test";?>

<?php ob_start(); ?>

<h1>test</h1>
<?php foreach($posts as $post): ?>
<?php var_dump($post);?>

    <h3><?= $post->name_vet?></h3>
<img src="public/img/<?= $post->vet_img ?>" alt="<?=$post->name_vet ?>">
<p><?=$post->price_vet ?></p>
<?php endforeach; ?>
<a href="index.php?action=view">Ajouter</a>
<?php $content = ob_get_clean(); ?>
<?php require ("template.php");