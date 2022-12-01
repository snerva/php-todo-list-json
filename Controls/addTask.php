<?php
require __DIR__ . '/../functions.php';

if (isset($_POST['newTask'])) {
    $newTaskText = $_POST['newTask'];
    $newTask = [
        "text" => $newTaskText,
        "done" => false
    ];
    $taskList = read_data('../tasks.json');
    array_push($taskList, $newTask);



    $jsonList = json_encode($taskList);
    //var_dum(jsonList));
    file_put_contents('../tasks.json', $jsonList);
    header('Content-Type: application/json');
    echo $jsonList;
}
