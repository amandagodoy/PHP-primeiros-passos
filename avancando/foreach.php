<?php

$contasCorrentes = [
    '174.979.463-78' => [
        'titular' => 'Amanda',
        'saldo' => 1000
    ], 
    '989.679.413-41' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '364.845.645-87' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes ['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000 
];

foreach($contasCorrentes as $cpf => $conta) {
    //echo $cpf . PHP_EOL;
    echo $cpf . " " . $conta ['titular'] . PHP_EOL;
}