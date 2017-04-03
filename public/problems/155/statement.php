<p align="justify">

<p>Uma das boas práticas ao administrar um conjunto de computadores é manter os aplicativos sempre atualizados. Entretanto, em uma grande corporação 
com milhares de aplicativos instalados, a simples verificação do que precisa ser atualizado pode tornar-se uma tarefa bem complicada. Para facilitar isso,
alguns fabricantes armazenam todos os aplicativos existentes em grandes bases de dados chamadas repositórios e um programa é
responsável por verificar esse repositório e atualizar as versões dos aplicativos.</p>
<p>M.V.Lzr, um administrador de sistemas e rapper nas horas vagas, trabalha em uma empresa que, infeliz-mente, não utiliza um sistema com repositórios. 
Para facilitar sua vida, ele decidiu que era a hora de ter o seu próprio sistema e pediu a sua ajuda.</p>
<p>Periodicamente ele varre a Internet em busca das páginas que possam conter os aplicativos e constrói uma
lista com as versões dos aplicativos que deseja instalar disponíveis em cada página. Um programa deve verificar
então qual a versão de cada programa instalado nos computadores (todos eles possuem os mesmos aplicativos
instalados e nas mesmas versões) e instalar todos aqueles que ainda não foram instalados ou cuja versão instalada
seja anterior a versão mais recente. Como ele não sabe programar direito, ele pediu sua ajuda.</p>

<h3>Tarefa</h3>
<p>Dado uma lista de aplicativos instaladas nos computadores da empresa, com suas respectivas versões e uma
lista de aplicativos disponíveis na internet que devem ser instalados, determinar quais devem ser instalados e
em quais versões.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha da entrada contém dois inteiros <i>C</i> (1 &le; <i>C</i> &le; 10.000) e <i>N</i> (1 &le; <i>N</i> &le; 1.000) que
representam o número total de aplicativos e versões disponíveis na internet e o número total de programas
instalados na empresa, respectivamente. As <i>C</i> linhas seguintes possuem dois inteiros cada, <i>P</i><sub>c</sub>
(1 &le; <i>P</i><sub>c</sub> &le; 1.000.000.000) e V<sub>c</sub> (1 &le; V<sub>c</sub> &le; 1.000.000.000), representando o número do programa e o número da versão
instalada nos computadores. Todo aplicativo está instalado uma única vez em cada máquina e em uma única
versão. Em seguida, as As <i>N</i> linhas seguintes possuem dois inteiros cada, <i>P</i><sub>n</sub> (1 &le; <i>P</i><sub>n</sub> &le; 1.000.000.000) e V<sub>n</sub> 
(1 &le; V<sub>n</sub> &le; 1.000.000.000), representando o número do programa e o número da versão disponível na internet.
Um dado programa pode estar disponível em mais de uma versão na internet.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, diversas linhas, cada uma contendo dois inteiros, <i>P</i><sub>s</sub> e V<sub>s</sub> com o
número do programa e a versão que deve ser instalada. Em todo caso de teste existe pelo menos um programa que deve ser instalado</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
1 1
5215 1
5215 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
5215 3
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
3 2
1640 1
2540 4
1870 3
2540 1
1640 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1640 4
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
2 5
2000 4
2001 5
2000 1
2001 4
2001 6
2000 2
2000 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
2001 6
      </pre>
    </td>
  </tr>
</table>

</p>
