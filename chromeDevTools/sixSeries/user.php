<?php
    header('Content-Type: application/json');

    $users = [
        ['name' => 'Dale', 'username' => 'dale'],
        ['name' => 'Mohammed', 'username' => 'mohammed'],
        ['name' => 'Vihaan', 'username' => 'vihaan'],
    ];

    echo json_encode($users);
?>