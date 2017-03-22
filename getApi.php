<?php



// $xml = file_get_contents('http://data.tmd.go.th/api/Weather3Hours/V1/');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
        'http://data.tmd.go.th/api/Weather3Hours/V1/');
// curl_setopt($ch, CURLOPT_HEADER, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);
// $xml = curl_exec($ch);
curl_close($ch);


 ?>
