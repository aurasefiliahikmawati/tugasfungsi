<?php
/**
 * Bulan
 * XII RPL 1
 */
function Volumekerucut ($jari2,$tinggi) {
    return (1/3*M_1_PI*$jari2*$jari2*$tinggi);
}
echo "volume kerucut dari T=15 cm r=14 adalah = " .volumekerucut (15,14);
?>