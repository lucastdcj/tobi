<h1> Solução </h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/YT7hVrWCgug" frameborder="0" allowfullscreen></iframe>
<br />
Neste problema desejamos subtrair dois números como o prório enunciado diz "[...] a diferença entre a pressão desejada e a pressão lida."
<h2> Código </h2>
<pre class="prettyprint">
<?php echo htmlspecialchars('
#include <cstdio>

int main() {
  int a, b;
  scanf(" %d %d", &a, &b);
  printf("%d\n",a - b);
  return 0;
}');?>   
</pre>
<script src="http://93.188.167.1/public/highlighter/prettify.js"></script>
<script>prettyPrint();</script>

