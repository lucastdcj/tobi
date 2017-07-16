<h1>1.4 - Vetores e Matrizes</h1>
<h2> Material: </h2>
<a href="http://olimpiada.ic.unicamp.br/saci/cursos_u/intro/class?c=intro_14"> Saci - Aula 14</a> <br>
<a href="http://olimpiada.ic.unicamp.br/extras/cursoC/Cap07-Vetores-texto.pdf"> Vetores - Arnaldo V. Moura, Daniel F. Ferber</a> <br>

<h2> Problema Exemplo: </h2>
<b>Caçadores de Mitos:</b> Neste problema são dadas diversas coordenadas e queremos saber se existe alguma coordenada repetida.
Para resolver, basta mantermos uma matriz (caiu[MAXN][MAXN]) de dimensões suficientemente grandes (MAXN > 500), onde caiu[i][j] = 0 indica 
que um raio não caiu na posição i, j e caiu[i][j] = 1 indica que um raio já caiu naquela posição.
  
<pre class="prettyprint"><?php echo htmlspecialchars('  
#include <cstdio>

#define MAXN 510

bool caiu[MAXN][MAXN];

int main() {
  for (int i = 0; i < MAXN; i++) {
    for (int j = 0; j < MAXN; j++) {
      caiu[i][j] = false; 
    }
  }
  int n;
  scanf(" %d", &n);
  int ja_caiu = 0;
  for (int i = 0; i < n; i++) {
    int x, y;
    scanf(" %d %d", &x, &y);
    if (caiu[x][y]) ja_caiu = 1;
    caiu[x][y] = true;
  }
  printf("%d\n", ja_caiu);
  return 0; 
}');?></pre>

<script src="http://www.t-obi.com/public/highlighter/prettify.js"></script>
<script>prettyPrint();</script>  
