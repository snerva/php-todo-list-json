<?php
require __DIR__ . '/../functions.php';
if (isset($_POST['taskIndex']) && isset($_POST['done'])) {
    $taskIndex = $_POST['taskIndex'];
    $taskValue = boolval($_POST['done']);
    $tasks = read_data('../tasks.json');
    //var_dump($tasks);
    $tasks[$taskIndex]["done"] = $taskValue;

    header('Content-Type: application/json');
    echo transform_array($tasks, '../tasks.json');
}
