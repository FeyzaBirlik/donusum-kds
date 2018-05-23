<?php
session_start();
               

require "kontrol.php";


$sorgu2="SELECT binalar.bina_id,binalar.risk_puani
FROM binalar
ORDER BY binalar.risk_puani desc";

$a=mysqli_query($baglan,$sorgu2);

include 'bootstrap/tarih.php';


?>
