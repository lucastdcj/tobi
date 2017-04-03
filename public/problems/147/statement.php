<p align="justify">

Uma subsequencia de uma sequencia de caracteres S e definida como uma sequencia de caracteres de S, nao
necessariamente consecutivos, na mesma ordem em que eles ocorrem na sequencia original.
Dadas duas sequencias de caracteres, S1 e S2 , dizemos que S1 possui grau N de independencia em relacao a
S2 se, dada qualquer subsequencia de tamanho N de S1 , nao e possivel formar tal subsequencia a partir de S2 .
Por exemplo, o grau de independencia da sequencia S1 =`ababaa' em relacao a sequencia S2 =`abbaa' e igual
a 3, pois todas as subsequencias de S1 de tamanho 1 (`a', `b') e todas as subsequencias de tamanho 2 (`aa', `ab',
`ba', `bb') podem ser formadas a partir de S2 , mas a subsequencia `bab', de tamanho 3, nao pode ser formada
a partir de S2 .

<h3> Tarefa </h3>
Escreva um programa que, dadas duas sequencias S1 e S2 , determine o grau N de independencia de S1 em relacao a S2 .

<h3> Entrada </h3>
A entrada contem um unico conjunto de testes, que deve ser lido do dispositivo de entrada padrao (normalmente
o teclado). A entrada contem tres linhas. A primeira linha contem dois inteiros N e M que indicam respectivamente o comprimento da seq
uencia S1 (1 <= N <= 2000) e o comprimento da sequencia S2 (1 <= M <= 2000).

A segunda linha contem a sequencia S1 e a terceira linha contem a sequencia S2 . As sequencias sao formadas
somente pelas letras minusculas sem acento ('a' - 'z'). As sequencias possuem no maximo 2000 caracteres.
Sempre existe uma solucao para os casos de teste fornecidos.

<h3> Saida </h3>
Seu programa deve imprimir, na saida padrao, uma unica linha, contendo o grau N de indepedencia de S1 em
relacao a S2 .

<h3> Exemplos: </h3>

<pre>
Entrada
ababaa
abbaa

Saída
3

Entrada
babab
babba

Saída
3

Entrada
banana
anbnaanbaan

Saída
5
</pre>

</p>
