<?php
require 'koneksi.php';

$pref = $_POST['phone_ref'];
$pafi = $_POST['phone_afi'];
         
$pdo = Koneksi::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO llx_afiliasi (phone_ref,phone_afi) values(?, ?)";
$q = $pdo->prepare($sql);
$q->execute(array($pref, $pafi));
Koneksi::disconnect();

header("Location: index.php");
?>