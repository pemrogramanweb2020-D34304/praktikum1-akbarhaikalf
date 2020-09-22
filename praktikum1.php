<?php
   echo "<center>";
	$bintang=5;
	for($m=1; $m<=$bintang; $m++){
	for($z=1; $z<=$m; $z++){
		echo " &nbsp";
	}
	for($n=$bintang; $n>=$m; $n-=1){
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