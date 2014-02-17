
<?php
/* 
Q1: lon1 106.678, lat1 10.788
Q2: lon2 106.706, lat2 10.7745

//echo 'OK';

$lat1 = 10.788;
$lat2 = 10.7634;
$lon1 = 106.678;
$lon2 = 106.679;


//echo '1';

$r = 6371;
//echo '2';
$dLat = ($lat2-$lat1) * (pi() / 180);
//echo '3';
$dLon = ($lon2-$lon1) * (pi() / 180);
//echo '4';
$a = sin($dLat/2) * sin($dLat/2) + cos($lat1 * (pi() / 180)) * cos($lat2 * (pi() / 180)) * sin($dLon/2) * sin(dLon/2);
//echo '5';
$c = 2 * atan2(sqrt(a), sqrt(1-a));
//echo '6';
$d = $r * c;

echo $d;

*/
function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

echo distance(10.788, 106.678, 10.7634, 106.679, "K") . " Kilometers<br>";
echo distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers<br>";
echo distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";


































