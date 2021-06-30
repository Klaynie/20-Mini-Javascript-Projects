<?php
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo "Riel: $riel\n";
echo "Kyat: $kyat\n";
echo "Krones: $krones\n";
echo "Lek: $lek\n";

$usd_2_riel = 4076.47;
$usd_2_kyat = 1646.84;
$usd_2_krones = 8.56;
$usd_2_lek = 103.03;

$usd_from_riel = round($riel / $usd_2_riel, 2);
$usd_from_kyat = round($kyat / $usd_2_kyat, 2);
$usd_from_krones = round($krones / $usd_2_krones, 2);
$usd_from_lek = round($lek / $usd_2_lek, 2);

echo "Your $riel Riel were exchanged for $usd_from_riel USD.\n";
echo "Your $kyat Riel were exchanged for $usd_2_kyat USD.\n";
echo "Your $krones Riel were exchanged for $usd_2_krones USD.\n";
echo "Your $lek Riel were exchanged for $usd_2_lek USD.\n";

$final_amount = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek - 4;

echo "After deducting the transactions fees, you will be recieving $final_amount USD.";