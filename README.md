# formata-valor-milhao
Converte números inteiros acima de um milhão para o seguinte formato: 1 mi.

Exemplos: 
// 1.000:
echo formataValor(1000);
// 1.000

// 1.000.000:
echo formataValor(1000000);
// 1 mi

// 1.500.000:
echo formataValor(1500000);
// 1,5 mi

// 1.250.000:
echo formataValor(1250000);
// 1,25 mi

// 1.250.000.000:
echo formataValor(1250000000);
// 1,25 bi

// 1.000.000.000:
echo formataValor(1000000000);
// 1 bi

// 1.090.000:
echo formataValor(1090000);
// 1,09 mi

// 1.090.000.000:
echo formataValor(1090000000);
// 1,09 bi

// 1.090.090:
echo formataValor(1090090);
// 1.090.090
