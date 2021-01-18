<?php
//include ('funcoes.php');
//include 'funcoes.php'; = ele quando dá um erro não informa exatamente o motivo. Mas tem uma outra que informa exatamente isso, e o mesmo acontece no include.
//require 'funcoes.php'; //ou seja ela informa quando a importação tem algum erro e aonde está esse erro exatamente, de forma clara. E quando tem duplicidade de importação ele duplica o código, também no arquivo a ser importado.

require_once 'funcoes.php'; //essa função sempre vai verificar, que está sendo incluido a tentativa se foi importado. Mas caso ele já tenha sido incluido ele não irá reclamar em nada no console. Ou seja, não havendo importação duplicada. 

/*
Existem níveis de erros:
E_WARNING = Seria vou continuar a execução, mas não sei o que quer fazer; | E_NOTICE = Seria quando ele encontra algum problema mas conseque se virar; | E_ERRO = Seria dar problema em tudo não sei executar;
*/

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

unset ($contasCorrentes['123.456.689-11']); = remove váriaveis da memória

titularComLetrasMaiusculas( $contasCorrentes['123.256.789-12']);

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Contas correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) {
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
        
    </dl>

</body>
</html>
