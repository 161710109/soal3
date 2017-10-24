<?php
require_once 'soal3.php';

$bio = new rumah ('bulat','coklat','biru');
echo"<br />";
echo"jenis jendela  :".$bio->get_jendela();
echo"<br />";
echo"warna pintu :".$bio->get_pintu();
echo"<br />";
echo"warna tembok  :".$bio->get_tembok();
echo"<br />";
?>