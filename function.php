<?php

function tinhTong($a) {
    $tong = 0;
    while ($a > 0)
    {
        $sodu = $a % 10;
        $tong += $sodu;
        $a = ($a - $sodu) / 10;
    }
    return $tong;
}

$result = tinhTong($_POST["number"]);
echo $result;

?>