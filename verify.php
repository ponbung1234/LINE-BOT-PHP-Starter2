<?php
$access_token = 'ubZ5p8cbxPrGOIOlQXUp3iA9awLEulLjUlWCsxAh80LIpd5Z9WkdAe1h+i/Jn/3k7/wIC9LHThX/BLzwYRElwRqX6KdmyEJGF2ZTApN4gwXlZ/mciLL/h/922Kicxw1RQRM92dbTyDG4DndDqjlUaQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;