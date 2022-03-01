<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
//echo 'swnd '.$_GET['address'];


//$output = shell_exec('node algo_airdrop.js '.$_GET['address'] . ' 2>&1 ');
//
file_put_contents("boba_claim", $_GET['address'].PHP_EOL, FILE_APPEND | LOCK_EX);

//echo $output;


echo 'Airdrop request recorded, processing';

?>
