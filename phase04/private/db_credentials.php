<?php
if($_SERVER['SERVER_NAME'] == 'localhost') {
  define("DB_SERVER", "localhost");
  define("DB_USER", "sally");
  define("DB_PASS", "P@ssword1234");
  define("DB_NAME", "salamanders");
} else {
  //siteground
  define("DB_SERVER", "web182.barterbobs.net");
  define("DB_USER", "uyd8gignhtnbp");
  define("DB_PASS", "s4iffZZNBEoQHig");
  define("DB_NAME", "dbjuhwq0klwlzt");
}

?>