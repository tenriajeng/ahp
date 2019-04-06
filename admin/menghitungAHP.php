<?php
include "koneksi.php";

$sql1 = "SELECT mhs.id_jur,jurusan.jur FROM mhs 
INNER JOIN jurusan ON jurusan.id_jur = mhs.id_jur WHERE mhs.id_need = 0";
$result = mysqli_query($connection,$sql1);
$idjur;
$a=0;
while($row = mysqli_fetch_array($result)){
    $idjur[$a] = $row['id_jur'];
    $a++;
}

$sql = "SELECT id, namaunit, point, point1, point2, point3, point4, jumlah_keb FROM need";
$point_need1D;
$point_need2D;
$result = mysqli_query($connection, $sql);
$a = 0;
while ($row = mysqli_fetch_array($result)) {
    $c = 0;
    $point_need1D[$a][$c++] = $row['point'];
    $point_need1D[$a][$c++] = $row['point1'];
    $point_need1D[$a][$c++] = $row['point2'];
    $point_need1D[$a][$c++] = $row['point3'];
    $point_need1D[$a][$c++] = $row['point4'];
    $a++;
}

$c = 0;
$jumlah = count($point_need1D[0]);

for ($i = 0; $i < $jumlah; $i++) {
    for ($u = 0; $u < $jumlah; $u++) {
        echo $point_need1D[$i][$u] . "&nbsp;";
    }
    echo "<br>";
}
// $jumlah = count($point_need1D);
// for ($i=0; $i < $jumlah ; $i++) {
//     for ($u=0; $u < $jumlah; $u++) {
//         $point_need2D[$i][$u] = $point_need1D[$c];
//         $c++;
//     }
// }

$dataH;

$jumlah = count($point_need1D[0]);

$h2 = 0;
$eigen1 = array();
$ba = 0;
for ($c = 0; $c < $jumlah; $c++) {
    $h = 0;
    for ($a = 0; $a < $jumlah; $a++) {
        $g = 0;
        for ($b = 0; $b < $jumlah; $b++) {
            $e = $point_need1D[$c][$b];
            $d = $point_need1D[$b][$a];
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
$eigenvector = array();
$ap = 0;
foreach ($eigen1 as $ito) {
    $hasil = $hasil + $ito / $h2;
    $eigenvector[$ap] = $ito / $h2;
    $ap++;
}

$jvector = count($eigenvector);

for ($i = 0; $i < $jvector; $i++) {
    echo $eigenvector[$i] . "<br>";
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
$eigenvector2 = array();
$ap = 0;
foreach ($eigen2 as $ito) {
    $hasil = $hasil + $ito / $h2;
    $eigenvector2[$ap] = $ito / $h2;
    $ap++;
}
for ($i = 0; $i < $jvector; $i++) {
    echo $eigenvector2[$i] . "<br>";
}
echo $hasil . "<br>";

for ($i = 0; $i < $jvector; $i++) {
    $hasilvector = ($eigenvector2[$i] - $eigenvector[$i]);
    echo $hasilvector . "<br>";
}