<?php

$name = "";
$contact = "";
$faculty = "";
$thisId = "";

$data = json_decode(file_get_contents('./pages/phoneDB.json'), true);

$data[$thisId] = array( 
        'name'=> $name, 
        'contact'=> $contact,
        'faculty'=> $faculty, 
); 
$json = json_encode($data);

echo $json;
    