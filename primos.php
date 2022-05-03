<?php
    // 2 -Função Primos($inicial,$final)
    // Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final)  e retorne um array com os números primos estão compreendidos entre o valor inicial e o final, desprezando o número inicial e final recebidos como parâmetro. 

    // Exemplo para teste:

    // Numero Inicial = 10
    // Número Final = 29
    // Resposta: Array [11,13,17,19,23] 

    function primos($inicial, $final){
        // Inicializando o array de números primos.
        $primos = [];
        // Criando uma variável que vai nos ajudar na lógica
        $count = 0;

        // Na lógica, começo um laço pra pegar todos os números entre $inicial e $final, excluindo eles
        for($i = $inicial+1; $i < $final; $i ++){
            // O segundo laço vai dividir o número atual por todos antes dele a partir do 1 até ele 
            // mesmo e contar quantas vezes o resto da divisão deu zero
            for($j = 1; $j <= $i; $j ++){
                if($i % $j == 0){
                    $count ++;
                }
            }
            // Para o número que estamos checando, se $count foi 2, assumimos que foi dividido apenas
            // por 1 e por ele mesmo, portanto é primo, aí podemos incluir ele no array, resetando
            // a contagem para checar o próximo número.
            if($count == 2){
                array_push($primos, $i);
                $count = 0;
            }else{
                $count = 0;
            }
        }
        // Então retornamos o array com os números primos.
        return $primos;
    }

    // Testando
    $teste = primos(10,29);
    print_r($teste);