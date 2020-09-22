<?php
   echo "<center>";
	$bintang=5;
	for($a=1; $a<=$bintang; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$bintang; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
    }
    echo "<br>";
    

    $x = 10;
    while ($x > 1) {
     $y = $x;
    while ($y >= 1) {
    echo "*";
    $y = $y - 1;
  }
  echo "<br>";
  $x = $x - 2;
}

    echo "<br>";

for($p = 5; $p >= 1; $p--){
    for($q = 1; $q <= 1  - $p; $q++){
        echo " ";
    }
    for($r = 1; $r < $p;$r++){
        echo "$r";
    }
    for($l = $p; $l >=1; $l--){
        echo "$l";
    }
  echo "<br>";
  }
  echo "</center>";
?>