<?php require_once('../../private/initialize.php'); 

  $id = $_GET['id'] ?? '1';

  $pageTitle = 'Salamander Details';

  include(SHARED_PATH . '/salamander-header.php');

?>

<p><a href="<?= urlFor('/salamanders/index.php'); ?>">&laquo; Back to list</a></p>
<h1>Stub for show.php</h1>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>