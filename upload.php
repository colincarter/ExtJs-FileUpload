<?php
$result = array(
  'success' => true,
  'file'    => $_FILES['audio-path']['name']
);

echo json_encode($result);
