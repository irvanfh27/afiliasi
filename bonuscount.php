<?php
require 'koneksi.php';

$phone = '089636183021';

$pdo = Koneksi::connect();
$sql = "SELECT count(*) FROM llx_afiliasi WHERE phone IN ($phone) AND bonus_ref = 1 AND redeem = 1";
$result = $pdo->query($sql);
// $result->execute();
$count = $result->fetch(PDO::FETCH_NUM);

echo $count;

?>