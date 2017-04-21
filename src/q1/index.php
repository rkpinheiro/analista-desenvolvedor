<?php require_once("../../vendor/autoload.php"); ?>

<?php $obj = new App\Q1\PrintHundred() ?>

<?php foreach ($obj->printCustomHundred() as $value): ?>
	<?= $value ?>
<?php endforeach ?>