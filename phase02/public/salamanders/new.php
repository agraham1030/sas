<?php

require_once("../../private/initialize.php");

$test = $_GET['test'] ?? '';

if ($test == '404') {
  error404();
} elseif ($test == '500') {
  error500();
} elseif ($test == 'redirect') {
  redirectTo(urlFor('/salamanders/index.php'));
}
?>

<?php $pageTitle = "Create Salamander" ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>
<a href="<?=urlFor('/salamanders/index.php')?>"><< Back to list</a>
<h1>Create Salamander</h1>

<form action="<?=urlFor('/salamanders/create.php')?>" method="post">
  <label for="salamanderName">Salamander Name: </label>
  <br>
  <input type="text" id="salamanderName" name="salamanderName">
  <br>
  <br>
  <input type="submit" value="Create Salamander">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
