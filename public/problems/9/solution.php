<h1 align="center">Solução - Cometa</h1>

<h2> Explicação </h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/qKAtC08zkhM" frameborder="0" allowfullscreen></iframe>
<br />
Neste problema desejamos saber o resto da divisão de um número por outro. Para isso em C/C++ usamos o operador %, por exemplo: 7 % 2 = 1; 9 % 3 = 0; 13 % 10 = 3 
<br />
<pre class="prettyprint"><?php echo htmlspecialchars('
#include <cstdio>

int main() {
  int C, N;
  scanf(" %d %d",&C, &N);
  printf("%d\n", C % N);
  return 0;
}');?>
</pre>

<script src="http://93.188.167.1/public/highlighter/prettify.js"></script>
<script>prettyPrint();</script>
