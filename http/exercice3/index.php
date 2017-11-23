<!DOCTYPE html>

<head>
	<meta charset="utf-8">

    <meta name="author" content="Etienne Trouillet">
    <meta name="description" content="Ynov Exercice">

    <meta http-equiv="Content-Language" content="fr-FR" />

    <title>Ynov | Exercice 1</title>
</head>

<body>

<h1>Images</h1>

<?php for ($i=1; $i<=20; $i++): ?>
    <img style="max-width: 500px" src="https://placem.at/people?txt=Image+<?php echo $i ?>" alt="<?php echo 'Image '.$i ?>">
<?php endfor ?>


</body>