<h1> Solução - Pedágio</h1>

<iframe width="560" height="315" src="https://www.youtube.com/embed/0ucGfbvAkRc" frameborder="0" allowfullscreen></iframe>
<br />
<h2> Código </h2>
<pre class="prettyprint"><?php echo htmlspecialchars('
#include <cstdio>

int main() {
  int a, b;
  int custo_por_km, valor_pedagio;
  scanf(" %d %d %d %d", &a, &b, &custo_por_km, &valor_pedagio);
  printf("%d\n", (a / b) * valor_pedagio + a * custo_por_km);
  return 0;
}');?>   
</pre>
<script src="http://93.188.167.1/public/highlighter/prettify.js"></script>
<script>prettyPrint();</script>
