<?php
require_once("phpqrcode/qrlib.php");

QRcode::png($_GET['code'], false,  QR_ECLEVEL_H, 4,  4);
?>