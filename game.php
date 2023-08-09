<?php

while (true){
    echo "Welcome To My Game\n";
echo "=====Game Tebak Angka=====\n";
echo "Pilih angka 1-10\n";
$random=rand(1,10);
$player=trim(fgets(STDIN));
if($random==$player){
    echo "you win\n";
    echo "angkanya adalah $random\n";
    exit;
}else{
    echo "you lose\n";
    echo "angkanya adalah $random\n";
}
}