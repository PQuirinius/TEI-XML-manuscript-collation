<?php session_start();
if (isset($_POST['back'])) {$_SESSION['view']=false; header("Location: index.php");}?>