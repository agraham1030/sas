<?php

include_once("../../private/initialize.php");

$test = $_GET['test'] ?? '';

if ($test == '404') {
  error404();
} elseif ($test == '500') {
  error500();
} elseif ($test == 'redirect') {
  redirectTo(urlFor('/salamanders/index.php'));
}
?>

<?php $pageTitle = "Edit Salamander" ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>
<a href="<?=urlFor('/salamanders/index.php')?>">&laquo; Back to list</a>
<h1>Edit Salamander</h1>

<form action="<?=urlFor('/salamanders/edit.php'.h(u($salamander['id'])));?>" method="post">
  <label for="salamanderName">Salamander Name: </label>
  <br>
  <input type="text" id="salamanderName" name="Salamander Name">
  <br>
  <br>
  <input type="submit" value="Edit Salamander">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
