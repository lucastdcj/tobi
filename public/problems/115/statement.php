<p align="justify">

<p>Voc&#234; conseguiu um estágio para trabalhar como programador na secretaria da sua escola. Como

primeira tarefa, Dona Vilma, a coordenadora, solicitou que voc&#234; aprimore um programa que foi

desenvolvido pelo estagiário anterior. Esse programa tem como entrada uma lista de nomes e de

médias finais dos alunos de uma turma, e determina o aluno com a maior média na turma. Dona

Vilma pretende utilizar o programa para premiar o melhor aluno de cada turma da escola. O programa

desenvolvido pelo estagiário anterior encontra-se no final  (em C, C++ e Pascal).</p>

<p>Como voc&#234; pode verificar, o programa na forma atual tem uma imperfeiç&#227;o: no caso de haver alunos

empatados com a melhor média na turma, ele imprime apenas o primeiro aluno que aparece

na lista.</p>

<h3>Tarefa</h3>

<p>Dona Vilma deseja que voc&#234; altere o programa para que ele produza uma lista com todos os alunos

da turma que obtiveram a maior média, e n&#227;o apenas um deles. Voc&#234; consegue ajudá-la nesta

tarefa?</p>

<h3>Entrada</h3>

<p>A entrada é constituída de vários conjuntos de teste, representando várias turmas. A primeira

linha de um conjunto de testes contém um número inteiro N (<code>1 <= N <= 1000</code>) que indica o total de

alunos na turma. As N linhas seguintes cont&#234;m, cada uma, um par de números inteiros C (<code>1 <= C

<= 20000</code>) e M (<code>0 <= M <= 100</code>), indicando respectivamente o código e a média de um aluno. O final

da entrada é indicado por uma turma com <code>N = 0</code>.</p>

<h3>Saída</h3>

<p>Para cada turma da entrada seu programa deve produzir tr&#234;s linhas na saída. A primeira linha deve

conter um identificador do conjunto de teste, no formato &#8220;Turma n&#8221;, onde n é numerado a partir

de 1. A segunda linha deve conter os códigos dos alunos que obtiveram a maior média da turma.

Os códigos dos alunos devem aparecer na mesma ordem da entrada, e cada um deve ser seguido

de um espaço em branco. A terceira linha deve ser deixada em branco. O formato mostrado no exemplo de saída abaixo deve ser seguido rigorosamente.</p>

<h3>Exemplo</h3>

<pre>

<b>Entrada:</b>

3

1 85

2 91

3 73

5

12300 81

12601 99

15023 76

10111 99

212 99

0



<b>Saída:</b>

Turma 1

2



Turma 2

12601 10111 212

</pre>



<h3>Restriç&#245;es</h3>

<p><code>0 <= N <= 1000</code> (N = 0 apenas para indicar o fim da entrada)<br>

<code>1 <= C <= 20000</code><br>

<code>0 <= M <= 100</code></p>



<b>Código em Pascal</b>

<pre>

program estagio;

const MAX_ALUNOS = 1000;

type

    registro_aluno = record

                         codigo, media : integer;

                     end;

var

    alunos : array[1..MAX_ALUNOS] of registro_aluno;

    n, i, indice_melhor, turma : integer;

begin

    readln(n); { le numero de alunos da primeira turma }

    turma := 1;

    while n > 0 do begin

       for i := 1 to n do { le dados dos alunos }

          readln(alunos[i].codigo, alunos[i].media);

       indice_melhor := 1;

       for i := 2 to n do { procura aluno de maior media }

          if alunos[i].media > alunos[indice_melhor].media then

             indice_melhor := i;

       { escreve resposta }

       writeln('Turma ', turma);

       turma := turma + 1;

       writeln(alunos[indice_melhor].codigo);

       writeln;

       { le numero de alunos da proxima turma }

       readln(n);

    end;

end.

</pre>



<b>Código em C</b>

<pre>

#include &lt;stdio.h&gt;

#define MAX_ALUNOS 1000

int main()

{

  int i, indice_melhor, n;

  int turma=1;

  struct

  {

    int codigo, media;

  } alunos[MAX_ALUNOS];

  /* le numero de alunos da primeira turma */

  scanf("%d", &n);

  while (n > 0)

    {

      /* le dados dos alunos */

      for (i = 0; i < n; i++)

         scanf("%d %d", &alunos[i].codigo, &alunos[i].media);

      /* procura aluno de maior media */

      indice_melhor = 0;

      for (i = 1; i < n; i++)

         if (alunos[i].media > alunos[indice_melhor].media)

             indice_melhor = i;

      /* escreve resposta */

      printf("Turma %d\n%d\n\n", turma++, alunos[indice_melhor].codigo);

      /* le numero de alunos da proxima turma */

      scanf("%d", &n);

    }

  return 0;

}

</pre>



<b>Código em C++</b>

<pre>

#include &lt;iostream&gt;

const int MAX_ALUNOS = 1000;

int main()

{

  int i, indice_melhor, n;

  int turma=1;

  struct

  {

    int codigo, media;

  } alunos[MAX_ALUNOS];

  // le numero de alunos da primeira turma

  cin >> n;

  while (n > 0)

    {

      // le dados dos alunos

      for (i = 0; i < n; i++)

         cin >> alunos[i].codigo >> alunos[i].media;

      // procura aluno de maior media

      indice_melhor = 0;

      for (i = 1; i < n; i++)

         if (alunos[i].media > alunos[indice_melhor].media)

             indice_melhor = i;

      // escreve resposta

      cout << "Turma " << turma++ << "\n";

      cout << alunos[indice_melhor].codigo << "\n\n";

      // le numero de alunos da proxima turma

      cin >> n;

    }

  return 0;

}

</pre>


</p>
