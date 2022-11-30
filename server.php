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
$taskList = json_decode($tasks);

if (isset($_POST['newTask'])) {
    array_push($taskList, $_POST['newTask']);
    $jsonList = json_encode($taskList);
    //var_dump($tasks);
    file_put_contents('tasks.json', $jsonList);
}


header('Content-Type: application/json');
echo json_encode($taskList);
