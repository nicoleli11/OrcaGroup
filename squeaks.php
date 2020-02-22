<?php
require_once('./data.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $squeaks = getAllSqueaks();

  $json = json_encode(["squeaks" => $squeaks]);
  header("Content-type: application/json");

  echo $json;
}
// Check if the incoming request is a POST request.
// Make sure a message and username have been sent in the POST request.
// else:
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST["username"]) && isset($_POST["message"]) 
  
  ) {
    $username = $_POST["username"];
    $message = $_POST["message"];
    $id = uniqid();
  // echo $username;
    $squeak = [
      "username" => $username,
      "message" => $message,
      "id" => $id,
      "likeCount" => 0
    ];

    saveNewSqueak($squeak);
    $json = json_encode(["squeak" => $squeak]);
    header("Content-type: application/json");

    echo $json;

    // send json


  } else {
    header("Content-type: application/json");
    http_response_code(422);
    echo json_encode(["error" => "Must post a message and username"]);
    exit();
  }
}
