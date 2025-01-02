# Formatar Valores em Real (R$) com PHP

Este repositório contém uma função em PHP para formatar valores monetários no padrão brasileiro (Real), utilizando a função nativa `number_format`. Ideal para aplicações que necessitam exibir valores monetários de forma padronizada e profissional.

## Funcionalidades

- Formatação de valores em moeda brasileira (R$);
- Conversão de números para o padrão com separador decimal (`,`) e de milhar (`.`);
- Compatível com projetos financeiros, e-commerces e outros sistemas.

## Exemplo de Uso

```php
<?php
require 'formatarValorEmReal.php';

$valor = 12345.6789;
echo formatarValorEmReal($valor);
// Saída: R$ 12.345,68
```

## Como Usar

1. Clone este repositório:

```bash
git clone https://github.com/webedmilson/Formatar-Dinheiro-Real.git
```

2. Inclua o arquivo no seu projeto:

```php
require 'caminho/para/formatarValorEmReal.php';
```

3. Use a função `formatarValorEmReal` passando o valor a ser formatado.

## Pré-requisitos

- PHP 7.0 ou superior.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir uma *issue* ou enviar um *pull request* com melhorias ou correções.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

Desenvolvido com ❤️ por Edmilson Rodrigues Júlio.
