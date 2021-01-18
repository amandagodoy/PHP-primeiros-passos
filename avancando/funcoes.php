<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

//pega uma string e coloca todos os caracteres em letra maiuscula.
//& informa que estou passando uma referência, ou seja, que estou recebendo a conta em si, e não uma conta dela. Quando ultilizamos a forma padrão sem o &, o que fazemos é passar uma cópia do valor da minha conta, ou que seria o valor dela.

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);

}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Tilular: $titular . saldo: $saldo</li>"
}