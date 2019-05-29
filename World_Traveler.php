<?php
  $riel = 210392;
	$kyat = 19092;
	$krone = 109;
	$lek = 9094;

echo " We started out with $riel riel, $kyat kyat, $krone krones and $lek lek.";
  
  //4057.35 riel = $1
  //1535.35 kyat =$1
  //8.76 krone = $1
  //109.80 lek = $1
  $riel_to_usd = .00025;
  $kyat_to_usd = .00065;
  $krone_to_usd = .11;
  $lek_to_usd= .0091;

$usd_from_riel = $riel * $riel_to_usd;
$usd_from_kyat = $kyat * $kyat_to_usd;
$usd_from_krone = $krone * $krone_to_usd;
$usd_from_lek = $lek * $lek_to_usd;

echo "\nYour $riel riel were converted to $usd_from_riel us dollars.";

 echo "\nYour $kyat kyat were converted to $usd_from_kyat us dollars.";
  
  echo "\nYour $krone krone were converted to $usd_from_krone us dollars.";
  
  echo "\nYour $lek lek were converted to $usd_from_lek
  us dollars.";
  
  $final_us_dollars = $usd_from_riel + $usd_from_kyat + $usd_from_krone + $usd_from_lek - 4;

echo "\nAfter deducting transaction fees, Your final amount is $$final_us_dollars US dollars.";
  
  ?>


