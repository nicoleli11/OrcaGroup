<?php
require_once('./data.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (isset($_POST["id"]) && isset($_POST["value"])) {
    $squeak = getSqueak($_POST["id"]);
    $value = $_POST["value"];
  // echo $username;
    $squeak["likeCount"] += $value;


    updateSqueak($squeak);

    $json = json_encode(["squeak" => $squeak]);
    header("Content-type: application/json");

    echo $json;

  } else {
    header("Content-type: application/json");
    http_response_code(422);
    echo json_encode(["error" => "Must post an id and a value"]);
    exit();
  }
  }
