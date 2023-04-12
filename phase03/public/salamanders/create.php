<?php

require_once("../../private/initialize.php");

// handles form values sent by new.php
if(isPostRequest()) {
  $salamanderName = $_POST['salamanderName'] ?? '';
  echo "Form parameters <br>";
  echo "Salamander Name: ".$salamanderName."<br>";
} else {
  redirectTo(urlFor('/salamanders/new.php'));
}


?>