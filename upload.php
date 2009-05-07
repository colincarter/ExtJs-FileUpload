<?php
$result = array(
  'success' => true,
  'file'    => $_FILES['path']['name']
);

echo json_encode($result);
