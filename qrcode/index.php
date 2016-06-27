<?php
	require_once 'qrcode.class.php';
	QRcode::png('http://www.fgsc888.com', './qrcode.png');
    echo "<img src='qrcode.png'/>";
    exit;
?>