<?php

/**
 * Geolocation tests
 *
 * Get latitude/longitude or address using Google Maps API
 *
 * @author Jeroen Desloovere <jeroen@siesqo.be>
 */

// require Geolocation
require_once '../src/Geolocation/Geolocation.php';

// define result
$result = Geolocation::getCoordinates('Koningin Maria Hendrikaplein', '1', 'Gent', '9000', 'belgië');

// dump result
echo 'Coordinates = ' . $result['latitude'] . ', ' . $result['longitude'] . '<br/>';

// define result: @return array(label, street, streetNumber, city, cityLocal, zip, country, countryLabel)
$result = Geolocation::getAddress(51.0363935, 3.7121008);

// define result
echo 'Address = ' . $result['label'] . '<br/>';
