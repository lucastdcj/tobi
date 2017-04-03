<p align="justify">

<p>Um serviço de busca na Internet está preocupado com a crescente taxa de erros de ortografia de seus usuários,
tornando mais difíceis as buscas por palavras chaves, que constantemente contêm erros de algumas letras,
devidos a má digitação ou má ortografia.</p>
<p>O serviço funciona com base num dicionário de palavras. O usuário deve inserir uma palavra num campo de
um formulário; o serviço então procura esta palavra no dicionário e retorna conteúdo que tenha relação com a
palavra.</p>
<p>Para contornar o problema de ortografia, você foi contratado para fazer um programa que tenta adivinhar qual
palavra o usuário pretendia procurar, independente de haver erros de ortografia nela.</p>
<p>Para este problema vamos definir a <i>distância</i> entre duas palavras <i>A</i> e <i>B</i> como sendo o número de operações,
descritas abaixo, necessárias para transformar <i>A</i> em <i>B</i>:</p>
<ol>
  <li>Retirar uma letra de <i>A</i>.</li>
  <li>Adicionar uma letra a <i>A</i>, em qualquer posição.</li> 
  <li>Trocar qualquer letra de <i>A</i> por outra letra, na mesma posição.</li> 
</ol>
<p>O serviço de busca definiu que a palavra <i>P</i> fornecida pelo usuário pode se referir a uma palavra <i>D</i> do dicionário
se está a uma distância de no máximo 2 de <i>D</i>.</p>
<p>Exemplos:</p>
<ul>
  <li>A palavra 'tu' pode se referir à palavra do dicionário 'tubo', realizando duas vezes a operação 2.</li>
  <li>A palavra 'crto' pode se referir à palavra do dicionário 'corte', realizando uma vez a operação 2 e uma vez
a operação 3.</li>
  <li>A palavra 'crto' pode se referir à palavra do dicionário 'curto', realizando uma vez a operação 2.</li>
  <li>A palavra 'hortgrafea' não pode se referir à palavra do dicionário 'ortografia'.</li> 
</ul>
<p>Você deve escrever um programa que, dado um dicionário de palavras, descubra para cada palavra fornecida
pelo usuário a quais palavras do dicionário ela pode se referir, nas condições descritas acima.</p>


<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha contém 2 inteiros N, M, representando respectivamente o número de palavras
contidas no dicionário (1 &le; N &le; 1000) e o número de palavras a serem analisadas (1 &le; M &le; 100). Cada
uma das N linhas seguintes conterá uma palavra pertencente ao dicionário. Cada uma das M linhas seguintes
conterá uma palavra a ser analisada, fornecida pelo usuário. Cada palavra pode ter de 1 a 20 letras, contendo
apenas letras de 'a' a 'z', minúsculas.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, M linhas, sendo uma linha para cada palavra fornecido pelo
usuário. Cada linha deve conter todas palavras do dicionário às quais a palavra fornecida pode se referir. No caso
de haver mais de uma palavra em uma linha da resposta, elas devem ser separadas por um espaço em branco,
apareçendo na ordem que elas foram dadas na entrada, como pode ser visto no exemplo de saída abaixo. No
caso de não haver nenhuma palavra em uma linha da resposta, deixe-a em branco.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, N &le; 10 e M &le; 10.</li>
  <li>Em um conjunto de casos de teste que totaliza 55 pontos, N &le; 50 e M &le; 500.</li> 
</ul>

<h3>Exemplo</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3 3
pato
pateta
caneca
pat
ccanecos
pata
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
pato

pato pateta
      </pre>
    </td>
  </tr>
</table>

</p>
