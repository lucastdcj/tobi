<p align="justify">

<p>A OBI (Organização Brasileira dos Índios) promoverá um festival indígena, onde várias tribos irão se reunir e
fazer demonstrações de cultura, como artesanato, danças, pinturas, comidas e etc.</p>
<p>Uma das tribos é a dos Tunak Tunak, que possuem uma apresentação de dança muito peculiar. Nessa dança,
existem <i>N</i> toras de madeira encrustadas no chão, dispostas de maneira circular e igualmente espaçadas. Em
algumas dessas toras fica um índio, olhando em sentido horário ou anti-horário.</p>
<p>A cada batida do tambor, os índios pulam para a próxima tora (que depende da direção para onde ele está
olhando no momento). Durante a dança, porém, algumas coisas podem acontecer:</p>
<ul>
  <li>Dois índios que pulam em sentidos opostos caem na mesma tora ao mesmo tempo.
Nesse caso, ambos permanecem nas toras, mas passam a pular na direção contrária a partir da próxima
batida de tambor (isso é, quem estava pulando em sentido horário passa a pular em sentido anti-horário,
e vice-versa)</li>
</ul>
<ul>  
  <li>Dois índios em toras consecutivas vão pular um em direção ao outro.
Nesse caso, os índios simplesmente não pulam (para não causar nenhum acidente), e, assim como no caso
anterior, passam a pular no sentido contrário a partir da próxima batida de tambor.</li>
</ul>
<p>Note que se o índio não pula e inverte seu sentido, mas ao mesmo tempo um outro índio cair na mesma tora
no sentido contrário, caimos no primeiro caso, e ambos os índios na tora invertem seus sentidos (assim, o índio
que estava na tora anteriormente inverte seu sentido novamente).</p>
<p>A dança termina quando as toras ocupadas por um índio são exatamente as mesmas toras ocupadas no início
da dança, não importando qual índio está em cada tora e nem os sentidos para onde eles estão pulando.</p>
<p>A figura abaixo ilustra (a) uma configuração inicial com oito toras e seis índios; (b) a posição dos índios após
uma batida de tambor; e (c) a posição dos índios após duas batidas de tambor.</p>

<div align="center">
<img src="../../../task_images/2010f2p1_danca.png" width="540" height="280"> 
</div>

<h3>Tarefa</h3>
<p>Os índios querem se preparar para a dança e precisam saber quanto tempo ela vai durar.</p>
<p>Para isso, você deverá escrever um programa que, dados a quantidade de toras que serão utilizadas, a quantidade
de índios e a posição inicial de cada um, calcule quantas batidas de tambor levará para que a dança termine.</p>

<h3>Entrada</h3>
<p>A primeira linha da entrada possui 2 inteiros: <i>N</i> (3 &le; <i>N</i> &le; 1.000.000) e <i>E</i> (1 &le; <i>E</i> &le; 1000), que são,
respectivamente, a quantidade de toras e a quantidade de índios que irão dançar (<i>E</i> &le; <i>N</i> ). As próximas <i>E</i> linhas contém, cada uma, a descrição da posição inicial de cada índio. Cada linha possui dois inteiros: <i>V</i>
(1 &le; <i>V</i> &le; <i>N</i> ) e <i>D</i> (<i>D</i> = 1 ou <i>D</i> = -1) que representam, respectivamente, o número da tora onde o índio inicia e seu sentido inicial (1 se horário, -1 se anti-horário). A numeração das toras obedece o sentido horário. No
início da dança uma tora terá, no máximo, um índio.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deverá exibir um número inteiro representando a quantidade de batidas de tambor necessárias
para que a dança acabe.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 40 pontos, <i>N</i> &le; 100 e <i>E</i> &le; 100.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
6 4
2 1
3 1
5 1
6 1   
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
3     
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
3 1
2 -1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
3
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
8 6
2 -1
3 1
4 -1
6 1
7 -1
8 1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
4
      </pre>
    </td>
  </tr>
</table>

</p>
