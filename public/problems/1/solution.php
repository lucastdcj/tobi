<h1 align="center">Solução - Busca na Internet</h1>

Seja t1, t2 e t3 a quantidade de cliques no primeiro, segundo e terceiro link respectivamente.
Do enunciado temos que:
<pre>
  t3 = t;
  t2 = 2*t3 = 2*t;
  t2 = t1/2 logo
  t1 = 2*t2 = 2*(2*t) = 4*t
</pre>
<br />
<pre class="prettyprint"><?php echo htmlspecialchars('
#include <cstdio>

int main() {
  int num_cliques;
  scanf(" %d",&num_cliques);
  printf("%d\n",4 * num_cliques);
  return 0;
}');?>
</pre>

<script src="https://t-obi.com/public/highlighter/prettify.js"></script>
<script>prettyPrint();</script>
