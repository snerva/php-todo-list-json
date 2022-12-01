<?php

function read_data($file)
{
    $tasks = file_get_contents($file);
    //var_dump($tasks);
    return json_decode($tasks, true);
}

function transform_array($taskList, $file)
{
    $jsonList = json_encode($taskList);
    //var_dum(jsonList));
    file_put_contents($file, $jsonList);
    return $jsonList;
}
