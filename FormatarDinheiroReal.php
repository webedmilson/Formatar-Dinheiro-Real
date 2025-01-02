<?php

/**
 * Formata um valor em dinheiro no formato da moeda brasileira (Real).
 *
 * @param float $valor O valor a ser formatado.
 * @return string O valor formatado em Real (R$).
 */
function formatarValorEmReal(float $valor): string {
    // Formata o número com duas casas decimais, separador de milhar como ponto e decimal como vírgula
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

// Exemplo de uso
$valor = 12345.6789;
echo formatarValorEmReal($valor);

?>
