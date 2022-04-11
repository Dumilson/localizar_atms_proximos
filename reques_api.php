
<?php

$url = 'https://maps.googleapis.com/maps/api/place/findplacefromtext/json?fields=formatted_address%2Cname%2Crating%2Copening_hours%2Cgeometry&input=cazenga%20de%20Maio&inputtype=textquery&key=AIzaSyCsJ8vVyCoHrvZuGxuhcwhlDEZtevVyoo8';
$hg = file_get_contents($url);
$response = json_decode($hg);
$get_location = $response->candidates[0]->geometry->location;
$send_request = [
    'lat' => $get_location->lat,
    'lng' => $get_location->lng,
];

echo $send_request;

?>