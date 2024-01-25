<?php
    header('Content-Type:application/json');
    header("Access-Control-Allow-Origin: http://localhost:5174");

    $todos = [
        [
            'task' => 'cucinare',
            'done' => true,
        ],
        [
            'task' => 'andare in chiesa',
            'done' => true,
        ],
        [
            'task' => 'fare i compiti',
            'done' => false,
        ],
        [
            'task' => 'comprare un gatto',
            'done' => false,
        ],
    ];

    echo json_encode($todos);
?>