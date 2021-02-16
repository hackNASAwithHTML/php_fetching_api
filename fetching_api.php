<?php

$api_url = 'http://127.0.0.1:8000/versions/';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);
// All user data exists in 'data' object
$user_data = $response_data->data;
// Cut long data into small & select only first 10 records
//$user_data = array_slice($user_data, 0, 9);
// Print data if need to debug
//print_r($user_data);
$user_data = array_slice($user_data, 0, 9);

// Traverse array and display user data
foreach($user_data as $result) {
    var_dump($result->attributes->series);
  //print_r($result->attributes->series); to completely fetching the data
}
?>
