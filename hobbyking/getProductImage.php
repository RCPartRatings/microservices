<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//WIP

//$url="http://www.hobbyking.com/hobbyking/store/__24788__FrSky_D4R_II_4ch_2_4Ghz_ACCST_Receiver_w_telemetry_.html";
$url = $_SERVER["QUERY_STRING"];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, 'http://www.hobbyking.com/hobbyking/store/HobbyKing_New_RC_Products.asp');
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
$curl_scraped_page = curl_exec($ch);
curl_close($ch);

$html = file_get_contents($curl_scraped_page);
$doc = new DOMDocument();
$doc->loadHTML($html);

$doc = $doc->getElementById('mainpic1');
echo $doc->getAttribute('src');

?>
