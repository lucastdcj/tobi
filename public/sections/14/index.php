<h1> Representação e Definiçoes de Grafos</h1>
<h2>Uma definição informal</h2>
Grafo não é um gráfico (como poderia sugerir o nome em inglês, <i>graph</i>).<br />
Grafo é basicamente um conjunto de pontos, e conexões entre esses pontos.<br />
<a href="http://commons.wikimedia.org/wiki/File:Undirected_graph.svg"><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Undirected_graph.svg/231px-Undirected_graph.svg.png" alt="Um grafo não-direcionado" /></a>
<br />
Os pontos são chamados de <i>vértices</i>, e as conexões, de <i>arestas</i>.<br />
Esses nomes são muito usados e logo você se tornará acostumado com eles.<br />
<br />
Um exemplo clássico de um grafo, mas muito ilustrativo, é o de algumas <i>cidades</i> ligadas por <i>rodovias</i>. Suponho que você já tenha percebido o que cada um representa: as cidades, os vértices; e as rodovias, as arestas.<br />
<br />
Os grafos podem ser <i>não-direcionados</i> ou <i>direcionados</i>. A imagem acima mostrou um grafo não-direcionado, ou seja, em que as arestas não têm direção definida.<br />
Veja isso como ruas de mão única, por exemplo.<br />
<a href="http://commons.wikimedia.org/wiki/File:Directed_graph.svg"><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Directed_graph.svg/231px-Directed_graph.svg.png" alt="Um grafo direcionado" /></a>
<br />
O grafos direcionados também são conhecidos como <i>digrafos</i>, <i>grafos dirigidos</i> ou <i>grafos orientados</i>.<br />
Grafos não-direcionados são conhecidos por <i>grafos</i>, <i>grafos não-dirigidos</i> ou <i>grafos não-orientados</i>.
<br />

<h2>Uma definição um pouco mais formal</h2>
Um grafo G é comumente representado como um par ordenado G = (V,A), onde temos V o <i>conjunto dos vértices</i> do grafo, e A o <i>conjunto das arestas</i>.<br />
Cada aresta é definida por um <i>par de vértices</i>, que pode ser um par ordenado ou não.<br />
Seja a aresta (u,v):<br />
- No caso do par ordenado, teremos que a aresta liga estritamente o vértice u ao v, e não o contrário. E o mesmo para todas as outras arestas, ou seja, elas têm uma direção definida.<br />
- Mas caso não houver uma ordenação definida, a aresta liga tanto o vértice u ao v, como o vértice v ao u.<br />
Os grafos em cada um dos casos acima são diferentemente nomeados, sendo o primeiro, um <i>grafo orientado</i>, e o segundo, um <i>grafo não-orientado</i>.
<br />

<h2>Mais um exemplo de grafos</h2>
Poderíamos dizer que <i>cada pessoa</i> é um vértice, e cada <i>relação de conhecer outra pessoa</i>, uma aresta.<br />
Assim, uma pessoa que conhece muitas outras, teria muitas arestas saindo dela.<br />
Vale pensar também se representaríamos este grafo como grafo direcionado ou não.<br />
Por conhecer outra pessoa, podemos pensar que signifique ter visto, conversado, e ainda lembrar. Então, como as pessoas podem esquecer de algum de seus <i>conhecidos</i>, mas as outras pessoas podem por acaso lembrar da primeira, devemos representar como um grafo direcionado!
<br />

<h2>Para quê grafos?</h2>
Os grafos podem representar diversas coisas, sendo que muitos problemas são <i>modelados</i> em grafos, e então resolvidos.<br />
Pense no <a href="http://maps.google.com/">Google Maps</a>, por exemplo. Para determinarmos os melhores caminhos entre dois lugares, poderíamos representar cada <i>rua</i> como as arestas, e para os vértices, as <i>interligações das ruas</i>.<br />
Definimos assim por ser <u><i>uma representação compacta e simples</i></u> de um mapa, que pode ser bastante complexo.<br />
Você provavelmente aprenderá mais adiante que esse problema de obter o <i>melhor caminho entre dois pontos</i> é clássico, e há diversos algoritmos para resolvê-lo.
<br />

<h2>Quero mais!</h2>
Bom, este artigo acaba aqui! Afinal, (<i>suponho que</i>) cumpre sua missão. Uma <i>introdução aos grafos</i> é o que promete, não? XD<br />
Mas claro, não deixe de conferir o artigo sobre <b>Representação de Grafos</b>. Afinal, agora que você sabe o que é um grafo, é preciso aprender a criá-lo com vetores e matrizes, no computador!<br />
<br />
Muito obrigado por ler!!
