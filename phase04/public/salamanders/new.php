<?php require_once('../../private/initialize.php'); 

$pageTitle = 'Create Salamander';
include(SHARED_PATH . '/salamander-header.php');?>

<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<h1>Create Salamander</h1>
<form action="<?php echo url_for('salamanders/create.php'); ?>" method="post">
  <label for="name">Salamander Name: </label><br>
  <input type="text" name="name"><br>
  <label for="habitat">Habitat: </label><br>
  <textarea rows="6" cols="50" name="habitat"></textarea><br>
  <label for="description">Description: </label><br>
  <textarea rows="6" cols="50" name ="description"></textarea><br>
  <input type="submit" value="Create Salamander">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
