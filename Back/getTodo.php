<?php
    header('Content-Type:application/json');
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Access-Control-Allow-Origin: http://localhost:5174");

    // versione con file json
    $jsonTodo = file_get_contents("todos.json");

    echo $jsonTodo;







    // versione senza file json

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

    // $jsonTodo = json_encode($todos);
    // echo $jsonTodo;
?>