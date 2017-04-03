<p align="justify">

<p>O SBC (<i>System for Batch Computing</i>) &eacute; um sistema operacional voltado para a execu&ccedil;&atilde;o sequencial de tarefas.
O operador do sistema cria tarefas e o sistema operacional &eacute; respons&aacute;vel por agendar a execu&ccedil;&atilde;o destas tarefas.</p>

<p>Cada tarefa pode depender da conclus&atilde;o de algumas tarefas para poder come&ccedil;ar. Se uma tarefa <i>A</i> depende de
uma tarefa <i>B</i>, a tarefa <i>B</i> deve terminar antes que a tarefa <i>A</i> inicie sua execu&ccedil;&atilde;o.</p>
<p>Al&eacute;m disto, cada tarefa possui uma prioridade. &Eacute; sempre mais vantajoso para o sistema come&ccedil;ar executando
uma tarefa de mais alta prioridade, depois continuar executando uma tarefa de mais alta prioridade dentre as
que sobraram e assim por diante.</p>
<p>Neste problema, ser&aacute; dado um inteiro <i>N</i>, que ir&aacute; representar o n&uacute;mero de tarefas no sistema. As tarefas ser&atilde;o
numeradas de 0 at&eacute; <i>N</i> - 1. Tarefas com &iacute;ndice menor possuem prioridade maior, de forma que a tarefa 0 &eacute; a
tarefa de mais alta prioridade, a tarefa 1 &eacute; a tarefa com a segunda maior prioridade e assim por diante, at&eacute; a
tarefa <i>N</i> -1, que &eacute; a tarefa com a menor prioridade. Al&eacute;m disso, ser&atilde;o dadas M rela&ccedil;&otilde;es de depend&ecirc;ncia entre
as tarefas.</p>
<p>Seu objetivo ser&aacute; decidir se &eacute; poss&iacute;vel executar as tarefas em alguma ordem. Caso seja poss&iacute;vel, voc&ecirc; dever&aacute;
produzir uma ordem de execu&ccedil;&atilde;o &oacute;tima para as tarefas, isto &eacute;, desempate as ordens poss&iacute;veis pela prioridade da
primeira tarefa. Se o empate ainda persistir, desempate pela prioridade da segunda tarefa, e assim por diante.</p>

<h3>Entrada</h3>

<p>A primeira linha da entrada cont&eacute;m inteiros <i>N</i> e <i>M</i>. As pr&oacute;ximas <i>M</i> linhas descrevem, cada uma, uma
depend&ecirc;ncia entre as tarefas da entrada. Cada uma dessas linhas ir&aacute; conter dois inteiros <i>A</i> e <i>B</i> que indicam
que a tarefa <i>B</i> depende da tarefa <i>A</i>, isto &eacute;, que a tarefa <i>A</i> deve terminar antes que a tarefa <i>B</i> inicie.</p>

<h3>Sa&iacute;da</h3>
<p>Se n&atilde;o for poss&iacute;vel ordenar as tarefas de forma que as depend&ecirc;ncias sejam satisfeitas, imprima uma &uacute;nica linha
contendo o caracter &quot;&lowast;&quot;. Caso contr&aacute;rio, imprima <i>N</i> linhas contendo cada uma um n&uacute;mero inteiro. O inteiro
na <i>i</i>-&eacute;sima linha deve ser o &iacute;ndice da <i>i</i>-&eacute;sima tarefa a ser executada na ordem &oacute;tima de execu&ccedil;&atilde;o das tarefas.
</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>0 &le; <i>N</i> &le; 50000.</li>
  <li>0 &le; <i>M</i> &le; 200000.</li>
  <li>0 &le; <i>A</i>, <i>B</i> &lt; <i>N</i>.</li>

</ul>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste totalizando 60 pontos, <i>N</i> &le; 1000.</li>
  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3 1
2 0
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1
2
0
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
2 2
0 1
1 0
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
&lowast;
      </pre>
    </td>
  </tr>
</table>
<br>


      <form method="post" action="Submissao">
      <input type="hidden" name="problem_name"
             value="2011f2p2_escalona">
      <input type="hidden" name="problem_name_full"
             value="Escalonamento ótimo">
      <div align="center"><input type="submit" name="submeter" value="Submete Solução"></div>
      </form>
      </td></tr>

    </table></td></tr>

</p>
