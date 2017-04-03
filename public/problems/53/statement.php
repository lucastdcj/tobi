<p align="justify">

<p>Tia Joana é uma respeitada professora e tem vários alunos. Em sua última aula, ela prometeu que iria sortear
um aluno para ganhar um bônus especial na nota final: ela colocou <i>N</i> pedaços de papel numerados de 1 a <i>N</i> em
um saquinho e sorteou um determinado número <i>K</i>; o aluno premiado foi o <i>K</i>-ésimo aluno na lista de chamada.</p>
<p>O problema é que a Tia Joana esqueceu o diário de classe, então ela não tem como saber qual número corresponde
a qual aluno. Ela sabe os nomes de todos os alunos, e que os números deles, de 1 até <i>N</i> , são atribuídos de acordo
com a ordem alfabética, mas os alunos dela estão muito ansiosos e querem logo saber quem foi o vencedor.</p>

<h3>Tarefa</h3>
<p>Dado os nomes dos alunos da Tia Joana e o número sorteado, determine o nome do aluno que deve receber o
bônus.</p>


<h3>Entrada</h3>
<p>A primeira linha contém dois inteiros <i>N</i> e <i>K</i> separados por um espaço em branco (1 &le; <i>K</i> &le; <i>N</i> &le; 100). Cada
uma das <i>N</i> linhas seguintes contém uma cadeia de caracteres de tamanho mínimo 1 e máximo 20 representando
os nomes dos alunos. Os nomes são compostos apenas por letras minúsculas de 'a' a 'z'.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir uma única linha, contendo o nome do aluno que deve receber o bônus.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>N</i> &le; 3.</li>  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 1
maria
joao
carlos
vanessa
jose
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
carlos
      </pre>
    </td>
  </tr>
</table>

<p></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 5
maria
joao
carlos
vanessa
jose
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
vanessa
      </pre>
    </td>
  </tr>
</table>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 3
maria
joao
carlos
vanessa
jose
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
jose
      </pre>
    </td>
  </tr>
</table>

</p>
