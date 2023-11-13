<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bd_cereso'
) or die(mysqli_erro($mysqli));

?>
