<?php 
// luasLingkar adalah function
// $jari adalah varabelnya
// menggunakan if untuk mencari tahu jika $jari kelipatan 7
// operator menggunakan rumus luas lingkaran
function luasLingkar($jari) {
    if ($jari%7==0) {
        echo 22/7*$jari*$jari;
    } else {
        echo 3.14*$jari*$jari;
    }
}
echo luasLingkar(7);