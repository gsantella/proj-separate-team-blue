<?php
//api url
$api_url = "http://api.openweathermap.org/data/2.5/weather?zip=15559&units=imperial&appid=fae79d6ccbaa879882d5706085ebe091";

//read JSON
$json_data = file_get_contents($api_url);

//decode JSON into a php array
$data = json_decode($json_data);
?>