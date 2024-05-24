<?php
function curlRequest($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
$urlA = 'https://abhinandu.000webhostapp.com/curl/userdata.php';
$dataA = curlRequest($urlA);
$urlB = 'https://maheedhar.000webhostapp.com/curl/userdata.php'; 
$dataB = curlRequest($urlB);
$urlC = 'https://praneethreddypenugonda.000webhostapp.com/curl/userdata.php'; 
$dataC = curlRequest($urlC);

echo '<p>Data From company A</p>';
print_r($dataA);
echo '<p>Data From company B</p>';
print_r($dataB);
echo '<p>Data From company C</p>';
print_r($dataC);

?>