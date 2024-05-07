<?php
$lists_json = file_get_contents('lists.json');
$lists = json_decode($lists_json, true);

header('Content-Type: application/json');
echo json_encode($lists);
?>