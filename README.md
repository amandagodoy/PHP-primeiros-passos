# PHP-primeiros-passos
Primeiros passou em php

Para saber mais: Arrays
PRÓXIMA ATIVIDADE

Os 2 primeiros capítulos deste curso foram exclusivamente sobre Arrays no PHP. Isso se dá pelo fato desta estrutura de dados ser tão poderosa da forma como é implementada no PHP, mas algumas considerações DEVEM ser feitas.

A primeira é: O array no PHP não é um array de verdade, como conhecemos nas demais linguagens. Internamente, os arrays são armazenados como HashTables (tabelas de espalhamento), e por isso eles são tão poderosos. Têm tamanho dinâmico, podem ter strings como seus índices e podem ser manipulados de diversas formas.

Mas com grandes poderes vêm grandes responsabilidades, e muitas pessoas abusam destes poderes. Tome cuidado para não tratar o array no PHP como a única opção para modelar seus dados. Conheça as outras opções e saiba quando aplicar cada uma. Uma dica: Estude (muito) sobre orientação a objetos e não use arrays quando deveria estar utilizando objetos.

Para ler mais a respeito de arrays em PHP e inclusive ver o exemplo utilizado neste último vídeo sobre os tipos de dados permitidos na chave de um array você pode consultar a página sobre arrays da documentação do PHP.

https://www.php.net/manual/pt_BR/language.types.array.php

para acessar um valor de um array associativo dentro de string devemos omitir as aspas da chave, por exemplo "$conta[titular]"
e alternativamente podemos usar chaves em volta do array, por exemplo: "{$conta['titular']}"
Também vimos que um código PHP pode ser separado em vários arquivos e orquestrar a execução podem usar include, require e require_once:

include não dá erro (apenas avisa) se o arquivo não existe, require dá erro
require_once garante que o arquivo será incluído apenas uma vez
Conhecemos que existem níveis de mensagens entre eles:

E_NOTICE, PHP dá um aviso mas "se vira" e continua com a execução
E_ERROR, PHP dá erro e para a execução do programa

Parece que a modificação está acontecendo, mas a $conta fora da função não está recebendo o titular em maiúsculo. Mas por que?

Existe um conceito relativamente complexo de passagem de variáveis e parâmetros por valor ou por referência. Basicamente, quando definimos uma função da forma padrão, que estamos utilizando até o momento, o PHP pega o valor da variável e "cola" na função quando ela é chamada.

Logo, no nosso caso, ele não está passando a $conta propriamente dita (o endereço em que ela está armazenada na memória), mas sim copiando o valor dela e enviando-o para a função.

A função, por si, está alterando o valor da "cópia" que recebeu, e não é o que queremos. Ao invés disso, precisamos receber o endereço onde a $conta está armazenada na memória, e que, caso esse valor seja alterado, isso se reflita na variável enviada. Isso é o conceito de passagem por referência.

Para tornarmos esses conceitos mais claros, vamos colocá-los em prática. Ao invés de simplesmente recebermos a $conta na função titularComLetrasMaiusculas(), vamos receber o endereço para a conta com &$conta. Esse & informa que estamos recebendo a variável em si, e não uma cópia dela.

Para ilustrar essa ideia de valor e referência, temos a seguinte gif:

![Alt Text](https://www.mathwarehouse.com/programming/images/pass-by-reference-vs-pass-by-value-animation.gif).

No quadro da direita, temos a passagem por valor para uma função fillCup() que enche uma variável cup cujo valor é uma xícara. Entretanto, a xícara original não é preenchida.

No quadro à esquerda, está sendo enviada uma referência à xícara - ou seja, a própria xícara. Dessa forma, quando a função fillCup() enche a xícara, a xícara original também é preenchida. Assim, a alteração na variável é refletida na variável utilizada para chamar a função.

Assim, temos outra forma de manipularmos nossas contas, sem a necessidade de retornarmos um valor e substituir a variável original. Porém, isso tem vantagens e desvantagens.

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

}

Porém, quando estamos trabalhando com esse tipo de manipulação, ela não faz sentido, sendo o ideal mantermos a passagem por valor para garantir a segurança dos nossos dados. No futuro, quando estudarmos conceitos de orientação a objetos, aprenderemos que às vezes faz sentido uma variável ser passada por referência - e em alguns momentos isso inclusive é mais seguro.

Já conseguimos fazer saques, depósitos e outras manipulações nas nossas contas, com loops, funções e subrotinas. Agora vamos imaginar que queremos pegar somente o primeiro item de uma lista qualquer, atribuindo uma variável a ele...ou pegar os três primeiros itens e atribuir variáveis a eles.

//echo "<ul>";
/*foreach($contasCorrentes as $cpf => $conta) {
    //echo $cpf . PHP_EOL;
    //exibeMensagem($mensagem: $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] );

    //exibeMensagem("$cpf $conta[titular] $conta[saldo]");
    //exibeMensagem("$cpf $conta['titular'] $conta['saldo']");
    //exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");

    /*['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        "$cpf $titular  $saldo"
    );*/

    exibeConta($conta);

}*/
//echo "</ul>";