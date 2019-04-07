<?php
include "koneksi.php";
// echo $colom;

//point jur
echo "ponit Jurusan <br>";
$sql = "SELECT id_jur, jur, point, point1, point2, point3, point4 FROM jurusan";
$result = mysqli_query($connection, $sql);
$point_jur;
$c = 0;
$a = 0;
while ($row = mysqli_fetch_array($result)) {
    $c = 0;
    $point_jur[$a][$c++] = $row['point'];
    $point_jur[$a][$c++] = $row['point1'];
    $point_jur[$a][$c++] = $row['point2'];
    $point_jur[$a][$c++] = $row['point3'];
    $point_jur[$a][$c++] = $row['point4'];
    $a++;
}

$c = 0;
$jumlah = count($point_jur[0]);

for ($i = 0; $i < $jumlah; $i++) {
    for ($u = 0; $u < $jumlah; $u++) {
        echo $point_jur[$i][$u] . "&nbsp;";
    }
    echo "<br>";
}

//point
function getpoin($point)
{
    include "koneksi.php";
    $result = mysqli_query($connection, $point);
    $point_gsd;
    $c = 0;
    $a = 0;
    while ($row = mysqli_fetch_array($result)) {
        $c = 0;
        $point_gsd[$a][$c++] = $row['point'];
        $point_gsd[$a][$c++] = $row['point1'];
        $point_gsd[$a][$c++] = $row['point2'];
        $point_gsd[$a][$c++] = $row['point3'];
        $point_gsd[$a][$c++] = $row['point4'];
        $a++;
    }

    $c = 0;
    $jumlah = count($point_gsd[0]);

    for ($i = 0; $i < $jumlah; $i++) {
        for ($u = 0; $u < $jumlah; $u++) {
            echo $point_gsd[$i][$u] . "&nbsp;";
        }
        echo "<br>";
    }
    return $point_gsd;
}

echo "<hr >";
//===============================================================================================//

//point need
echo "point Need <br>";
$sql = "SELECT id, namaunit, point, point1, point2, jumlah_keb FROM need";
$point_need1D;
$point_need2D;
$result = mysqli_query($connection, $sql);
$a = 0;
while ($row = mysqli_fetch_array($result)) {
    $c = 0;
    $point_need1D[$a][$c++] = $row['point'];
    $point_need1D[$a][$c++] = $row['point1'];
    $point_need1D[$a][$c++] = $row['point2'];
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
//===============================================================================================//
echo "<hr >";
$dataH;
function ahpstep($data)
{

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
    for ($i = 0; $i < $jumlah; $i++) {
        for ($u = 0; $u < $jumlah; $u++) {
            $dataH2[$i][$u] = $dataH[$tam];
            $tam++;
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
    return $eigenvector;
}

//echo eigen
//gsd
$point_gsd = getpoin("SELECT id, point, point1, point2, point3, point4 FROM gsd");
$eigentgsd = ahpstep($point_gsd);
for ($i = 0; $i < 5; $i++) {
    echo "gsd" . $eigentgsd[$i] . "<br>";
}
//lgs
$point_lgs = getpoin("SELECT id, point, point1, point2, point3, point4 FROM logistic_general_support");
$eigentlgs = ahpstep($point_lgs);
for ($i = 0; $i < 5; $i++) {
    echo "LGS" . $eigentlgs[$i] . "<br>";
}

//RV
$point_rv = getpoin("SELECT id, point, point1, point2, point3, point4 FROM regional_vii");
$eigentrv = ahpstep($point_rv);
for ($i = 0; $i < 5; $i++) {
    echo "RV" . $eigentrv[$i] . "<br>";
}
$eigentjur = ahpstep($point_jur);
for ($i = 0; $i < 5; $i++) {
    echo "jur" . $eigentjur[$i] . "<br>";
}
//Need
$iegenNeed = ahpstep($point_need1D);
for ($i = 0; $i < 3; $i++) {
    echo "Need" . $iegenNeed[$i] . "<br>";
}

$jumlah = count($eigentrv);
$alternative;

$alterID = array();
$alterData = array();
for ($u = 0; $u < $jumlah; $u++) {
    $c = 0;
    $alternative[$u] = $eigentgsd[$u] * $iegenNeed[$c++];
    $alternative[$u] = $eigentlgs[$u] * $iegenNeed[$c++] + $alternative[$u];
    $alternative[$u] = $eigentrv[$u] * $iegenNeed[$c++] + $alternative[$u];
}
$jumlah = count($alternative);
for ($i = 0; $i < $jumlah; $i++) {
    echo $alternative[$i] . "Alternative<br>";
}

for ($i = 0; $i < $jumlah; $i++) {
    $alterID[$i] = $i;
    $alterData[$i] = $alternative[$i];
}

// foreach ($alterID as $key) {
//     echo $key . "KEY <br>";
// }

do {
    $swapped = false;
    for ($i = 0, $c = count($alterData) - 1; $i < $c; $i++) {
        if ($alterData[$i] > $alterData[$i + 1]) {
            list($alterData[$i + 1], $alterData[$i]) = array($alterData[$i], $alterData[$i + 1]);
            list($alterID[$i + 1], $alterID[$i]) = array($alterID[$i], $alterID[$i + 1]);
            $swapped = true;
        }
    }
} while ($swapped);

for ($i = $jumlah - 1; $i >= 0; $i--) {
    $alterID[$i] = $alterID[$i] + 1;

}

for ($i = $jumlah - 1; $i >= 0; $i--) {
    echo $alterID[$i] . "&nbsp;&nbsp;" . $alterData[$i] . "<br>";

}

// echo "<hr>";
// $jumlah = count($alternative[0]);
// for ($i=0; $i < $jumlah ; $i++) {
//     for ($u=0; $u < $jumlah; $u++) {
//         $c=0;
//         echo $alternative[$i][$u]."&nbsp;&nbsp;" ;
//         echo $alternative[$i][$u]."&nbsp;&nbsp;" ;
//         echo $alternative[$i][$u]."&nbsp;&nbsp;" ;
//     }
//     echo "<br>";
// }
$sql = "SELECT id, id_need, nama, asal, nama_file, id_jur, tujuan, tgl_msk, tgl_klr FROM mhs WHERE id_need = 0";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_array($result)) {
    
}
