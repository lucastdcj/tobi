<h1> 1.2 - Estruturas Condicionais</h1>
<h2> Material </h2>
<a href="http://olimpiada.ic.unicamp.br/saci/cursos_u/intro/class?c=intro_6"> Saci - Aula 6</a> <br>
<a href="http://olimpiada.ic.unicamp.br/saci/cursos_u/intro/class?c=intro_7"> Saci - Aula 7</a> <br>
<a href="http://olimpiada.ic.unicamp.br/extras/cursoC/Cap05-EstruturasCondicionais-texto.pdf"> Estruturas Condicionais - Arnaldo V. Moura, Daniel F. Ferber</a> <br>

<h2> Problemas Exemplo </h2>
<b>Sedex: </b> Neste problema é dado o diâmetro de uma bola de boliche e as dimensões de uma caixa. Para saber se a bola cabe na caixa, basta verificar se o diâmetro é menor do que todas as medidas da caixa.<br>
Solução:
<pre class="prettyprint"><?php echo htmlspecialchars('
#include <cstdio>

int main() {
  int n;
  int a, b, c;
  scanf(" %d", &n);
  scanf(" %d %d %d", &a, &b, &c);
  if (n <= a && n <= b && n <= c) {
    printf("S\n"); 
  } else {
    printf("N\n"); 
  }
  return 0; 
}
);?></pre>

