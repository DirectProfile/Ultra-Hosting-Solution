<?php
  session_start();

  unset($_SESSION['userSession']);
  session_unset();
  session_destroy();
  header("Location: index.php");