<?php

$nilai = 100;

if($nilai > 90){
    echo "Nilai : $nilai Predikat A+";
}else if($nilai > 80){
    echo "Nilai : $nilai Predikat A";
}else if($nilai > 70){
    echo "Nilai : $nilai Predikat B+";
}else if($nilai > 60){
    echo "Nilai : $nilai Predikat B";
}else if($nilai > 50){
    echo "Nilai : $nilai Predikat C+";
}else if($nilai > 40){
    echo "Nilai : $nilai Predikat C";
}else if($nilai > 30){
    echo "Nilai : $nilai Predikat D";
}else if($nilai < 30){
    echo "Nilai : $nilai Predikat E";
}
?>