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
$tasks = file_get_contents('../tasks.json');
//var_dump($tasks);
header('Content-Type: application/json');
echo $tasks;
