<?php
require 'koneksi.php';
$phone = $_REQUEST['phone_ref'];
$pdo = Koneksi::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE llx_afiliasi  set redeem = 0 WHERE phone_ref = $phone";
$q = $pdo->prepare($sql);
$q->execute();
Koneksi::disconnect();
header("Location: viewbonus.php");

?>