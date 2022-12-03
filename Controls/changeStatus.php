<?php
require __DIR__ . '/../functions.php';
if (isset($_POST['taskIndex'])) {
    $taskIndex = ($_POST['taskIndex']);
    $tasks = read_data('../tasks.json');
    $tasks[$taskIndex]["done"] = !$tasks[$taskIndex]["done"];

    header('Content-Type: application/json');
    echo transform_array($tasks, '../tasks.json');
}
