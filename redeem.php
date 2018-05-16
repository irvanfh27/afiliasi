<?php
require 'koneksi.php';
$id = $_REQUEST['id'];
$pdo = Koneksi::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE afiliasis  set redeem = 0 WHERE id = $id";
$q = $pdo->prepare($sql);
$q->execute();
Koneksi::disconnect();
header("Location: index.php");

?>