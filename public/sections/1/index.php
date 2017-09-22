
<h1> 1.1 - Compilando meu primeiro programa </h1>
<br />
Nesta seção você irá encontrar referências para aprender o que é algoritmo, o que é um código-fonte,
como compilá-lo e os comandos básicos de C. Antes de começar, assista aos 5 primeiros vídeos do treinamento Saci: <br/>
<h2> Material </h2>
<a href="http://olimpiada.ic.unicamp.br/saci/cursos_u/intro/class?c=intro_1"> Aula 1 - Introdução</a> <br>
<a href="http://olimpiada.ic.unicamp.br/saci/cursos_u/intro/class?c=intro_2"> Aula 2 - O primeiro programa, com o comando de escrita printf</a> <br>
<a href="http://olimpiada.ic.unicamp.br/saci/cursos_u/intro/class?c=intro_3"> Aula 3 - Mais sobre o comando de escrita printf</a> <br>
<a href="http://olimpiada.ic.unicamp.br/saci/cursos_u/intro/class?c=intro_4"> Aula 4 - Declaração de variáveis e comando de atribuição</a> <br>
<a href="http://olimpiada.ic.unicamp.br/saci/cursos_u/intro/class?c=intro_5"> Aula 5 - Comando de leitura scanf</a> <br>
<p>
<br />
Agora que você aprendeu um pouco dos conceitos básicos usando Javascript, leia as instruções abaixo para como fazer o mesmo em C/C++.
<ol>
  <li> <a href="#compilar"> Como executar/compilar um código </a> </li>
  <li> <a href="#comandos"> Comandos Básicos de C/C++ </a></li>
  <li> <a href="#tobi"> Submetendo no TOBI </a></li>
</ol>
<a name="compilar"></a>
<h2> Como executar/compilar um código </h2> 
<b>Codeblocks</b>
<p align="justify">
Para começar a escreve código em C/C++ vamos usar um software chamado Codeblocks, siga <a href ="http://t-obi.com/public/sections/1/codeblocks.pdf">esses passos</a> para instalar e executar o seu primeiro
programar.
</p>
<b>Ideone</b>
<p align="justify">
Caso você não deseje executar o programa na sua máquina, uma alternativa é usar o site <a href="http://www.ideone.com" target="blank">ideone</a> ,
no qual você pode colocar o seu código, a entrada do problema e ele compilará e executará o seu código com aquela entrada, muito similar ao que foi feito 
no Saci nos vídeos aceima.
</p>
<img src ="http://t-obi.com/public/sections/1/ideone.png">
<p align="justify">
As partes importantes são aquelas que estão marcadas com o retângulo preto. A primeira região indica onde você deve colocar o seu código, a
segunda região é a entrada, aquilo que o seu programa vai ler para produzir uma saída, embaixo podemos escolher a linguagem e stdin indica a
<b> entrada padrão </b>, isto é, o seu programa usará como entrada os dados fornecido no retângulo acima. Por fim, clique no botão Run para executar
o seu código com esta entrada.
</p>
<br />

<a name="comandos"></a>
<h2> Comandos Básicos de C/C++ </h2>
<ul> 
  <li> <a href ="http://t-obi.com/public/sections/1/parte_2.pdf"> Comandos Básicos </a> material usado na semana olímpica.</li>
</ul>

<a name="tobi"></a>
<h2> Submetendo no TOBI </h2>
Como esta é a primeira seção, mostraremos aqui como submeter o código e a solução de dois problemas. Após resolvido
os problemas, para submeter é muito simples, ao lado de cada problema tem um ícone <img src="http://olimpiada.ic.unicamp.br/tobi/public/img/icons/submit.png">.
Ao clicar neste ícone você será redirecionado para a tela de submissão, onde você deve escolher a linguagem e colar o seu código.

<h3> Busca na Internet </h3>
  <b> Solução </b> Seja t1, t2 e t3 a quantidade de cliques no primeiro, segundo e terceiro link respectivamente.
  Do enunciado temos que: <br />
    <pre>
      t3 = t;
      t2 = 2*t3 = 2*t;
      t2 = t1/2 logo t1 = 2*t2 = 2*(2*t) = 4*t
    </pre>
  A entrada desse programa é t, a quantidade de pessoas que clicaram no teceiro link e como desejamos saber quantas
  pessoas clicaram no primeiro link, a saida é 4*t.
  <pre class="prettyprint"><?php echo htmlspecialchars('
// Biblioteca necessária para podermos usar as funções printf, scanf
#include <stdio.h>

int main() {
  // Declara uma variavel do tipo inteiro
  int x;
  // Le um inteiro e armazena em x 
  scanf("%d",&x);
  // Imprime o valor de x multiplicado por 4
  // poderiamos tambem armazenar o resultado em uma outra variavel
  printf("%d\n",4*x);
  return 0;
}');?></pre>
<br />
<h3> Cometa </h3>
  <p align="justify">
  <b> Solução </b> Este problema é um pouco mais complicado, dado um ano a, desejamos saber qual o próximo ano que passará um cometa
sabendo que este cometa passa nos anos 1986 + 76*k (k &gt;= 0). Logo temos que achar o menor k, tal que 1986 + 76*k &gt; a.
    Em C/C++, usando variáveis inteiras, uma divisão sempre é arredondada para baixo, portanto, 3 / 2 = 1, 10  / 3 = 3. Logo,
    (a - 1986) / 76 dará o último k tal que o cometa passou, então nossa resposta será simplesmente 1986 + 76 * (k + 1).
  <pre class="prettyprint"><?php echo htmlspecialchars('
#include <stdio.h>

int main() {
  int a;
  scanf(" %d",&a);
  int k = (a - 1986) / 76;
  printf("%d\n", 1986 + 76 * (k + 1));
  return 0;
}');?></pre>

</p>
  <script src="http://olimpiada.ic.unicamp.br/tobi/public/highlighter/prettify.js"></script>
  <script>prettyPrint();</script>


