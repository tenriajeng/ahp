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
        1 / 3,
    )
   
);

function ahpku($data1)
{
    $jumlah = count($data1[0]);
    
    $h2  = 0;
    $ptl = array();
    for ($c = 0; $c < $jumlah; $c++) {
        $h = 0;
        for ($a = 0; $a < $jumlah; $a++) {
            $g = 0;
            for ($b = 0; $b < $jumlah; $b++) {
                $e = $data1[$c][$b];
                $d = $data1[$b][$a];
                $f = $e * $d;
                $g = $g + $f;
                
            }

            echo "<u>" . ($g) . "</u>&nbsp;&nbsp;&nbsp;";
            $h  = $h + $g;
            $h2 = $h2 + $g;

            
        }
        $ptl[$c] = $h;
        
        echo $h;
        echo "<br>";
    }
    echo $h2 . "<br><br>";
    $hasil = 0;
    foreach ($ptl as $ito) {
        $hasil = $hasil + $ito / $h2;
        
    }
    
    echo $hasil;
}

ahpku($data);
?>