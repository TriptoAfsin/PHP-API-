<?php

//headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

//include 'Route.php';
$uri = $_SERVER['REQUEST_URI'];

$uri = trim($uri, "/");





/*
Route::add('/about', function(){
    echo 'Demo API About';
});
*/


//$route -> submit();

//DB Results
$results =[];

$arr = [];

$arr['status_code'] = 1;
$arr['message'] = "Request of successfull ✔";
$arr['data'] = $results;
$arr['random_num'] = rand(1, 1000);

try{
    if(isset($_GET['rad'])){
        $arr['radius'] = $_GET['rad'];
        $arr['area'] = pow($_GET['rad'], 2)*pi(); 
    }
    throw new Exception();

}catch(Exception $e){
    //echo "Error Occured";
}

if(isset($arr['radius'])){
    $arr['radius'] = $arr['radius'];
    echo json_encode($arr);
}

else if(isset($_GET['about'])){
    require 'pages/about.php';
}

else if(isset($_GET['phone'])){
    require 'phone.php';
    //or
    //require 'pages/phoneDB.json';
}

else if(isset($_GET['fname']) && isset($_GET['lname'])){
    $nameArr = [];
    $nameArr['first-name'] = $_GET['fname'];
    $nameArr['last-name'] = $_GET['lname'];
    echo json_encode($nameArr);
}

else{
    echo json_encode($arr);
}








//Route::run('/');

?>