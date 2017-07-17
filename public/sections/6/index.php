<h1>2.1 - Pilha e Fila</h1>
<h2> Material </h2>
<a href="https://www.ime.usp.br/~pf/algoritmos/aulas/pilha.html"> Pilhas - IME USP </a> <br>
<a href="https://www.ime.usp.br/~pf/algoritmos/aulas/fila.html"> Fila - IME USP </a> <br>
<a href="http://www.cplusplus.com/reference/queue/queue/"> Queue - C++ Reference (inglês)</a> <br>
<a href="http://www.cplusplus.com/reference/stack/stack/"> Stack - C++ Reference (inglês)</a> <br>
<a href="http://noic.com.br/informatica/curso-noic-de-informatica/aula-6-estruturas-de-dados-i-explorando-o-c/"> Pilha e Filha - NOIC </a> <br>

<h2> Problema Exemplo </h2>
<b> <a href="http://www.t-obi.com/problem/show/6/81"> Ações na Bolsa </a>: </b> Neste problema é dado uma sequência de valores e 
queremos saber qual é o intervalo de tamanho 4 que tem soma máxima, para resolver podemos manter uma fila de tamanho 4 e ir adicionando
e removendo elementos.

<pre class="prettyprint"><?php echo htmlspecialchars('
#include <bits/stdc++.h>

using namespace std;

int main() {
  int n; scanf(" %d", &n);
  queue<int> q;
  int aux = 0;
  for (int i = 0; i < 4; i++, n--) {
    int acao; scanf(" %d", &acao);
    q.push(acao);
    aux += acao;
  }

  int ans = aux;
  while (n--) {
    int acao; scanf(" %d", &acao);
    aux = aux + acao - q.front();
    q.pop();
    q.push(acao);
    ans = max(ans, aux);    
  }
  printf("%d\n",ans);

  return 0;
}');?></pre>

<script src="http://www.t-obi.com/public/highlighter/prettify.js"></script>
<script>prettyPrint();</script>
