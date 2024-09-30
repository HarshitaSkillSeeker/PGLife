<?php
  session_start();
  session_destroy();
  header("location: /PGLife/index.php");
  exit();
?>
