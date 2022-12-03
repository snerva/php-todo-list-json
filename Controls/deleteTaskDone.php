<?php
require __DIR__ . '/../functions.php';
if (isset($_POST['taskIndex'])) {

    $tasks = read_data('../tasks.json');

    $taskindex = $_POST['taskIndex'];
    array_splice($tasks, $taskindex, 1);

    header('Content-Type: application/json');
    echo transform_array($tasks);
}
