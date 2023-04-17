<?php

require_once('../../private/initialize.php');
$page_title = 'Edit Salamander';
include(SHARED_PATH . '/salamander-header.php'); 
$id = $_GET['id'];

if (is_post_request()) {
  $salamander = [];
  $salamander['id'] = $id;
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = update_salamander($salamander);
  redirect_to(url_for('salamanders/show.php?id=' . $salamander['id']));

} else {
  $salamander = find_salamander_by_id($id);
}

?>

<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<h1>Edit Salamander</h1>
<form action="<?php echo url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
  <label for="name">Salamander Name: </label><br>
  <input type="text" name="name" value="<?php echo h($salamander['name'])?>"><br>
  <label for="habitat">Habitat: </label><br>
  <textarea rows="6" cols="50" name="habitat"><?php echo h($salamander['habitat'])?></textarea><br>
  <label for="description">Description: </label><br>
  <textarea rows="6" cols="50" name ="description"><?php echo h($salamander['description'])?></textarea><br>
  <input type="submit" value="Edit Salamander">
</form>


<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
