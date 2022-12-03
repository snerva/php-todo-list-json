<?php

function read_data($file)
{
    $tasks = file_get_contents($file);
    //var_dump($tasks);
    return json_decode($tasks, true);
}

function transform_array($tasks)
{
    $jsonList = json_encode($tasks);
    //var_dum(jsonList));
    file_put_contents('../tasks.json', $jsonList);
    return $jsonList;
}
