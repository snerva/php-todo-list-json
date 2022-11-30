<?php
/*
$tasks= [
    {
        "text": "HTML",
        "done": true
    },
    {
        "text": "CSS",
        "done": true
    },
    {
        "text": "Responsive design",
        "done": true
    },
    {
        "text": "Javascript",
        "done": true
    },
    {
        "text": "PHP",
        "done": true
    },
    {
        "text": "Laravel",
        "done": true
    },
]
*/
$tasks = file_get_contents('tasks.json');
//var_dump($tasks);
$taskList = json_decode($tasks, true);

if (isset($_POST['newTask'])) {
    $newTaskText = $_POST['newTask'];
    $newTask = [
        "text" => $newTaskText,
        "done" => false
    ];
    array_push($taskList, $newTask);
    $jsonList = json_encode($taskList);
    //var_dump($tasks);
    file_put_contents('tasks.json', $jsonList);
}


header('Content-Type: application/json');
echo json_encode($taskList);
