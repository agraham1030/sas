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
<h1>Stub for edit.php</h1>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
