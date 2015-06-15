<?php

//WIP

$url="http://www.hobbyking.com/hobbyking/store/__24788__FrSky_D4R_II_4ch_2_4Ghz_ACCST_Receiver_w_telemetry_.html";

$html = file_get_contents($url);

$doc = new DOMDocument();
@$doc->loadHTML($html);

$doc = $doc->getElementById('mainpic1');
echo $doc.getAttribute('src');

?>
