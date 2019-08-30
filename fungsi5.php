<?php
function tambah_string (&$str) {
$str = $str . ", Jakarta";
return $str;
}
// nilai
$str = "Universitas Budi Luhur";
echo "\$str = $str<br>";
// panggil fungsi + nilai (parameter)
echo tambah_string ($str). "<br>";
// memanggil nilai
echo "\$str = $str<br>";
?>