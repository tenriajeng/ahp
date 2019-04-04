<?php

$data = array(
    array(
        1,
        1,
        3,
        3,
        3,
    ),
    array(
        1,
        1,
        3,
        3,
        3,
    ),
    array(
        0.33,
        0.33,
        1,
        1,
        1,
    ),
    array(
        1 / 3,
        1 / 3,
        1 / 3,
        1 / 3,
        1 / 3,
    ),
    array(
        1 / 3,
        1 / 3,
        1 / 3,
        1 / 3,
        1,
    ),

);

$dataH;

$jumlah = count($data[0]);

$h2 = 0;
$eigen1 = array();
$ba = 0;
for ($c = 0; $c < $jumlah; $c++) {
    $h = 0;
    for ($a = 0; $a < $jumlah; $a++) {
        $g = 0;
        for ($b = 0; $b < $jumlah; $b++) {
            $e = $data[$c][$b];
            $d = $data[$b][$a];
            $f = $e * $d;
            $g = $g + $f;
        }

        $dataH[$ba] = $g;
        $ba++;

        echo "<u>" . ($g) . "</u>&nbsp;&nbsp;&nbsp;";
        $h = $h + $g;
        $h2 = $h2 + $g;
    }
    $eigen1[$c] = $h;

    echo $h;
    echo "<br>";
}
echo $h2 . "<br><br>";
$hasil = 0;
foreach ($eigen1 as $ito) {
    $hasil = $hasil + $ito / $h2;

}

$dataH2;

echo $hasil . "<br>";

$tam = 0;
for ($i = 0; $i < 5; $i++) {
    for ($u = 0; $u < 5; $u++) {
        $dataH2[$i][$u] = $dataH[$tam];
        $tam++;
        // echo "&nbsp;<br>";
    }
}

$jumlah = count($dataH2[0]);

$h2 = 0;
$eigen2 = array();
$ba = 0;
for ($c = 0; $c < $jumlah; $c++) {
    $h = 0;
    for ($a = 0; $a < $jumlah; $a++) {
        $g = 0;
        for ($b = 0; $b < $jumlah; $b++) {
            $e = $dataH2[$c][$b];
            $d = $dataH2[$b][$a];
            $f = $e * $d;
            $g = $g + $f;
        }

        echo "<u>" . ($g) . "</u>&nbsp;&nbsp;&nbsp;";
        $h = $h + $g;
        $h2 = $h2 + $g;
    }
    $eigen2[$c] = $h;

    echo $h;
    echo "<br>";
}
echo $h2 . "<br><br>";
$hasil = 0;
foreach ($eigen2 as $ito) {
    $hasil = $hasil + $ito / $h2;
}
echo $hasil . "<br>";

$jeigent = count($eigen1);
for ($i = 0; $i < $jeigent; $i++) {
    $hasileigen = $eigen2[$i] - $eigen1[$i];
    echo $hasileigen . "<br>";
}
