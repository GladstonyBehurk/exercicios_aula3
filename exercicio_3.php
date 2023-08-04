<?php
$preco = 320;

echo "O preço é $preco";
echo "<br>";

$porcentagem=12/100;
$acrescimo= $preco * $porcentagem;
echo "Foi aplicado a correção de 12%. Que corresponde a $acrescimo";
echo "<br>";

$novo_preco = $acrescimo + $preco;
echo "O valor total da compra é $novo_preco";
echo "<br>";

$parcelas=$novo_preco/10;
echo "O valor pode ser dividido em 10 vezes de $parcelas";