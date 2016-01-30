<?php

function http_header($url) {
    $handle = curl_init($url);
    curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($handle);
    $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
	$loadtime = curl_getinfo($handle, CURLINFO_TOTAL_TIME);
    curl_close($handle);
    echo "<br/><br/>";
echo "<b>HTTP Code: </b> $htmlcode";
echo "<br/></br>";
echo "<b> Load Time:</b>".$loadtime;
    
}
$webaddress = $_POST["website"];
$htmlcode = http_header($webaddress);




?>
