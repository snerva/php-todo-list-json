<?php
require __DIR__ . '/../functions.php';
if (isset($_POST['taskIndex'])) {
    $taskindex = $_POST['taskIndex'];
    $tasks = read_data('../tasks.json');

    array_splice($tasks, $taskIndex, 1);

    header('Content-Type: application/json');
    echo transform_array($tasks, '../tasks.json');
}
