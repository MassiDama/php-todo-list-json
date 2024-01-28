<?php
    header('Content-Type:application/json');
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Access-Control-Allow-Origin: http://localhost:5174");

    $jsonTodo = file_get_contents("todos.json");
    $todos = json_decode($jsonTodo, true);

    $task =$_POST['task'];

    $newTask = [
        'task' => $task,
        'done' => true,
    ];

    $todos[] = $newTask;
    $jsonTodo = json_encode($todos);

    file_put_contents("todos.json", $jsonTodo);
    echo $jsonTodo;

    

    // $todos = [
    //     [
    //         'task' => 'cucinare',
    //         'done' => true,
    //     ],
    //     [
    //         'task' => 'andare in chiesa',
    //         'done' => true,
    //     ],
    //     [
    //         'task' => 'fare i compiti',
    //         'done' => false,
    //     ],
    //     [
    //         'task' => 'comprare un gatto',
    //         'done' => false,
    //     ],
    // ];

   