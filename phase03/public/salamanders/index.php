<?php
  require_once('../../private/initialize.php'); 

  $salamander_set = find_all_salamanders();
  $pageTitle = 'Salamanders';

  include(SHARED_PATH.'/salamander-header.php');
?>

<h1>Salamanders</h1>

  <a href="<?= urlFor('/salamanders/new.php')?>">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Habitat</th>
    <th>Description</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php while($salamander = mysqli_fetch_assoc($salamander_set)) { ?>
        <tr>
          <td><?php echo h($salamander['id']); ?></td>
    	    <td><?php echo h($salamander['name']); ?></td>
          <td><?php echo h($salamander['habitat']); ?></td>
          <td><?php echo h($salamander['description']); ?></td>
          <td><a href="<?= urlFor('salamanders/show.php?id='.h(u($salamander['id'])));?>">View</a></td>
          <td><a href="<?= urlFor('/salamanders/edit.php?id='.h(u($salamander['id'])));?>"">Edit</a></td>
          <td><a href="<?= urlFor('/salamanders/delete.php?id='.h(u($salamander['id'])));?>"">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

    <?php
      mysqli_free_result($subject_set);
    ?>

    <?php include(SHARED_PATH . '/salamander-footer.php'); ?>
