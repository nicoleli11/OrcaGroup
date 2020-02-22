<?php
require_once('./data.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (isset($_POST["id"])) {
    $id = $_POST["id"];
  // echo $username;
    $squeak = [
      "id" => $id
    ];

    deleteSqueak($id);
    $json= json_encode(["id" => $id]);
    header("Content-type: application/json");
    echo $json;

    // send json


  } else {
    header("Content-type: application/json");
    http_response_code(422);
    echo json_encode(["id" => $id]);
    exit();
  }
}
