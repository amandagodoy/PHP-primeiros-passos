<?php

<?php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
    'qualquer_coisa' => 'Teste'
];

foreach ($array as $item) {
    echo $item .    PHP_EOL;
}

/* 
Dessa vez, tanto "d" quanto "Teste" serão exibidos na tela. Então qual o problema?

Primeiramente, o PHP só consegue trabalhar, em arrays associativos, com chaves dos tipos inteiro ou string. Qualquer outro tipo diferente desses vai ser convertido para uma string ou inteiro. Repare que, quando adicionamos o valor b, definimos uma string 1 como chave. Quando o PHP reconhece que uma chave tem um valor que pode ser representado numericamente, ele tenta convertê-la para um inteiro. Nessa conversão, ele sobrescreveu o primeiro índice - dessa forma, o "b" substituiu o "a".

Já quando tentamos utilizar um tipo float como chave, ele também foi convertido para um inteiro, ignorando o decimal. Assim, ao invés de 1.5, ficamos novamente com 1, e o valor c sobrescreveu o anterior.

Em seguida, tentamos adicionar um valor booleano true como índice. Porém, ele também é convertido para um inteiro 1, sobrescrevendo novamente o valor. Já o booleano false seria convertido para 0.

É necessário refletirmos que em nenhum caso criaríamos um array com chaves tão aleatórias quanto as do nosso exemplo. Além disso, caso precisemos nos preocupar com esse tipo de situação por algum motivo, a documentação do PHP explica em detalhes como o PHP define essas chaves:

Strings contendo inteiros válidos, serão convertidos para o tipo inteiro. Por exemplo, a chave"8" será, na verdade, armazenada como 8. Entretanto, "08" não será convertido, por não ser um inteiro decimal válido.

Floats também são convertidos para inteiros, isso significa que a parte fracionada será removida. Por exemplo, a chave 8.7 será na verdade armazenada como 8.

Booleanos são convertidos para inteiros, igualmente, por exemplo, a chave true, será na verdade armazenada como 1 e a chave false como 0.

Null será convertido para uma string vazia, por exemplo, a chave null na verdade será armazenada como "".

Arrays e objetos não podem ser usados como chaves. Fazer isso resultará em um aviso: Illegal offset type.

Para entender com mais detalhes como ocorrem as conversões de tipo em PHP, a documentação contém ainda uma tabela de comparações de tipos muito informativa.

Voltando ao ponto principal da explicação, quando estivermos definindo chaves para arrays associativos, elas precisam ter um significado. Assim, se tivermos um inteiro, depois uma string, depois um float e depois um booleano, tudo isso sendo definido como chave, já perdemos o significado dela. A ideia é não só entendermos mais a fundo o funcionamento do PHP, mas também evitarmos esse tipo de prática pouco inteligente.

O ideal é mantermos uma consistência: se as chaves do nosso array são strings, vamos manter sempre strings; se são números inteiros, usaremos sempre inteiros.

Agora que esclarecemos melhor essa parte, vamos continuar trabalhando nas nossas contas-correntes. Como podemos adicionar funcionalidades ao nosso programa, como saque ou depósito? Conversaremos sobre isso na próxima aula!

https://php.net/manual/pt_BR/language.types.array.php
*/