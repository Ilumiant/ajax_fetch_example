<?php

  $numero1 = $_POST["numero1"];
  $numero2 = $_POST["numero2"];

  echo json_encode(["resultado" => $numero1 + $numero2]);
