<?php
require_once('web.corew7coin.php');
 
$w7coin = new w7coin('elizeu','12345678'); //somente usuario e senha a fica no web.corew7coin

$w7coin->getinfo();

print_r($w7coin);
echo'<hr>';
$balance = $w7coin->{'response'}['result']['balance'];

print_r($balance);
?>
