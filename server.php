<?php
$tasks = file_get_contents('tasks.json');

header('Content-Type: application/json');
echo json_encode($tasks);
