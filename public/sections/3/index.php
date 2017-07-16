<h1> 1.3 - Estruturas de Repetição</h1>
<h2> Material </h2>
<a href="http://olimpiada.ic.unicamp.br/saci/cursos_u/intro/class?c=intro_9"> Saci - Aula 9</a> <br>
<a href="http://olimpiada.ic.unicamp.br/saci/cursos_u/intro/class?c=intro_13"> Saci - Aula 13</a> <br>
<a href="http://olimpiada.ic.unicamp.br/extras/cursoC/Cap06-RepeticaoControle-texto.pdf"> Estruturas de Repetição - Arnaldo V. Moura, Daniel F. Ferber</a> <br>

<h2> Problema Exemplo </h2>
<b> Saldo do Vovô:</b> Neste problema é dado um saldo inicial e diversas movimentações na conta do Vovô, você deve manter uma variável auxiliar 
indicando o menor saldo, a cada entrada você calculda o saldo atual e verifica se é menor do que o menor saldo, atualizando este se for necessário.

<pre class="prettyprint"><?php echo htmlspecialchars('
#include <cstdio>

int main() {
  int n;
  int saldo_inicial;
  scanf("%d %d", &n, &saldo_inicial);
  int saldo = saldo_inicial;
  for (int i = 0; i < n; i++) {
    int x; scanf(" %d", &x);
    saldo_inicial += x;
    if (saldo_inicial < saldo) saldo = saldo_inicial;
  }
  printf("%d\n", saldo);
  return 0; 
}');?></pre>

<script src="http://www.t-obi.com/public/highlighter/prettify.js"></script>
<script>prettyPrint();</script>
