<h1 align="center">Solução - Cometa</h1>
Dado um ano, desejamos saber qual o próximo ano que passará um cometa sabendo que este passa nos anos 1986 + 76*k (k >= 0).
<br />
Logo temos que achar o menor k, tal que:
<pre>
  1986 + 76*k >= a + 1;
  k >= a + 1 - 1986;
  k >= (a + 1 - 1986)/76;
</pre>  
Agora entra um truque de programação, em C/C++ quando fazemos a divisão de dois inteiros o resultado é arredondado para baixo,
ou seja, 5/2 = 2, 5/3 = 1, 7/3 = 2, 4/2 = 2...
<br />
Neste caso desejamos arredondar o resultado de (a + 1 - 1986)/76 para cima, então o que podemos fazer é tranformar a divisão a/b em (a + b - 1)/b.
Portanto, teremos: (5 + 1)/2 = 3, (5 + 2)/3 = 2, (7 + 2)/3 = 3, (4 + 1)/2 = 2.
Note que os resultados agora foram arredondados para cima e a divisão exata continua com o valor correto.
<br />
<pre class="prettyprint"><?php echo htmlspecialchars('
#include <cstdio>

int main() {
  int ano;
  scanf(" %d",&ano);
  int k = (ano - 1986 + 76)/76;
  printf("%d\n",1986 + 76*k);
  return 0;
}');?>
</pre>
<script src="https://t-obi.com/public/highlighter/prettify.js"></script>
<script>prettyPrint();</script>

