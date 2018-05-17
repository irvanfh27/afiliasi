<?php
require 'koneksi.php';

$pref = $_POST['phone_ref'];
$pafi = $_POST['phone_afi'];


$pdo = Koneksi::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/**
 * GET Data fk_status_ref
 */
$q = $pdo->query("SELECT status_client FROM llx_societe WHERE phone IN ($pref)");
$ref = $q->fetch(PDO::FETCH_ASSOC);
$data_ref = $ref['status_client'];
/**
 * Get Data fk_status_afi
 */
$q = $pdo->query("SELECT status_client FROM llx_societe WHERE phone IN ($pafi)");
$afi = $q->fetch(PDO::FETCH_ASSOC);
$data_afi = $afi['status_client'];



$sql = "INSERT INTO llx_afiliasi (phone_ref,phone_afi, fk_status_ref,fk_status_afi) values(?, ?, ? ,?)";
$q = $pdo->prepare($sql);
$q->execute(array($pref, $pafi, $data_ref, $data_afi));
Koneksi::disconnect();

header("Location: index.php");
?>