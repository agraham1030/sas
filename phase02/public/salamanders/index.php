<?php
  require_once('../../private/initialize.php'); 

  $salamanders = [
    ['id' => '1', 'salamanderName' => 'Red-Legged Salamander'],
    ['id' => '2', 'salamanderName' => 'Pigeon Mountain Salamander'],
    ['id' => '3', 'salamanderName' => 'ZigZag Salamander'],
    ['id' => '4', 'salamanderName' => 'Slimy Salamander'],
  ];

  $pageTitle = 'Salamanders';

  include(SHARED_PATH.'/salamander-header.php');
?>

<h1>Salamanders</h1>

  <a href="<?= urlFor('/salamanders/new.php')?>">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php foreach($salamanders as $salamander) { ?>
        <tr>
          <td><?php echo h($salamander['id']); ?></td>
    	    <td><?php echo h($salamander['salamanderName']); ?></td>
          <td><a href="<?= urlFor('salamanders/show.php?id='.h(u($salamander['id'])));?>">View</a></td>
          <td><a href="<?= urlFor('/salamanders/edit.php?id='.h(u($salamander['id'])));?>"">Edit</a></td>
          <td><a href="#">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

    <?php include(SHARED_PATH . '/salamander-footer.php'); ?>
