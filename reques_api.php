
<?php

$url = 'https://maps.googleapis.com/maps/api/place/findplacefromtext/json?fields=formatted_address%2Cname%2Crating%2Copening_hours%2Cgeometry&input=cazenga%20de%20Maio&inputtype=textquery&key=AIzaSyCsJ8vVyCoHrvZuGxuhcwhlDEZtevVyoo8';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$pokemons = json_decode(curl_exec($ch));

$get_location = $pokemons->candidates[0]->geometry->location;

$send_request = [
    'lat' => $get_location->lat,
    'lng' => $get_location->lng,
];

return '{error:true}';

return [
  'data' => json_encode($send_request),
];

?>