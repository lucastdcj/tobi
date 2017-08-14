
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

Agora que você aprendeu um pouco dos conceitos básicos usando Javascript, leia as instruções abaixo para como fazer o mesmo na linguagem C. Note que
tudo  muito similar, caso você tenha qualquer dúvida em como fazer em C, por favor, perguntem no fórum.
<ol>
  <li> <a href="#compilar"> Como executar/compilar um código </a> </li>
  <li> <a href="#ideone"> Alternativa: ideone </a></li>
  <li> <a href="#comandos"> Comandos Básicos de C/C++ </a></li>
  <li> <a href="#ctocpp"> C->C++ </a></li>
  <li> <a href="#tobi"> Submetendo no TOBI </a></li>
</ol>
<a name="compilar"></a>
<h2> 3 - Como executar/compilar um código </h2> 
Os dois videos abaixo são suficientes para poder compilar e executar seu primeiro programa no Windows. <br />
<ul>
  <li> [2] <a href = "https://www.youtube.com/watch?v=LfIS1YQcZTA"> Instalando o Code::Blocks no Windows</a> por André Santanchè</li>
  <li> [3] <a href = "https://www.youtube.com/watch?v=CrPfMRXObCs"> Escrevendo e Compilando um Programa em C</a> por André Santanchè</li>
</ul>

<br />

<a name="ideone"></a>
<h2> 4 - Alternativa: ideone </h2>
<p align="justify">
Caso você não deseje executar o programa na sua máquina, uma alternativa é usar o site <a href="http://www.ideone.com" target="blank">ideone</a> ,
no qual você pode colocar o seu código, a entrada do problema e ele compilará e executará o seu código com aquela entrada, veja um exemplo abaixo:
</p>

<img src ="http://olimpiada.ic.unicamp.br/tobi/public/sections/1/ideone.png">
<p align="justify">
As partes importantes são aquelas que estão marcadas com o retângulo preto. A primeira região indica onde você deve colocar o seu código, a
segunda região é a entrada, aquilo que o seu programa vai ler para produzir uma saída, embaixo podemos escolher a linguagem e stdin indica a
<b> entrada padrão </b>, isto é, o seu programa usará como entrada os dados fornecido no retângulo acima. Por fim, clique no botão Run para executar
o seu código com esta entrada.
</p>
<br />

<a name="comandos"></a>
<h2> 5 - Comandos Básicos de C/C++ </h2>
<ul> 
  <li> [4] <a href ="http://olimpiada.ic.unicamp.br/tobi/public/sections/1/parte_2.pdf"> Comandos Básicos </a> material usado na semana olímpica.</li>
</ul>



<a name="ctocpp"></a>
<h2> 6 - C -> C++ </h2>

<p align="justify">
 Os materiais aqui disponíveis são referentes a linguagem C, mas ao longo do curso todo código será em C++,
 então sugiro começar salvando seus programas em .cpp ao invés de .c e usar g++ ao invés de gcc. Essas são as únicas
mudanças necessárias para essa parte, o código-fonte continua o mesmo.
</p> 


<a name="tobi"></a>
<h2> 7 - Submetendo no TOBI </h2>
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
sabendo que este cometa passa nos anos 1986 + 76*k (k &gt;= 0). Logo temos que achar o menor k, tal que 1986 + 76*k &gt;= a + 1.
  <pre>
    1986 + 76*k >= a + 1;
    k >= (a + 1) - 1986;
    k >= ((a + 1) - 1986)/76;
  </pre>
  Agora entra um truque de programação, em C/C++ quando fazemos a divisão de dois inteiros o resultado é arredondado para baixo, ou seja,
5/2 = 2, 5/3 = 1, 7/3 = 2, 4/2 = 2...
  Mas nesse caso desejamos arredondar o resultado para cima, então o que podemos fazer é tranformar a divisão a/b em (a + b -1)/b, portanto
teremos:
(5 + 1)/2 = 3, (5 + 2)/3 = 2, (7 + 2)/3 = 3, (4 + 1)/2 = 2
  Note que os resultados agora foram arredondados para cima e a divisão exata continua com o valor correto.
  <pre class="prettyprint"><?php echo htmlspecialchars('
#include <stdio.h>

int main() {
  int a;
  scanf(" %d",&a);
  int k = ((a + 1) - 1986 + 76 - 1)/76;
  printf("%d\n",1986 + 76*k);
  return 0;
}');?></pre>

</p>
  <script src="http://olimpiada.ic.unicamp.br/tobi/public/highlighter/prettify.js"></script>
  <script>prettyPrint();</script>


