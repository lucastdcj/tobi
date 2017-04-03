<div id='wikitext'>
  <pre class='escaped'>
Autor: Lucas Tiago de Castro Jesus
</pre>
  <div class='vspace'></div>
  <h2>Texto Introdutório</h2>
  <p>O problema <em> Árvore geradora mínima em grafos </em> é, resumidamente: tendo um grafo não-direcional com custos nas arestas, obter um subconjunto destas que conecte todos os vértices do
    grafo.Este subconjunto deve ter custo mínimo,ou seja, a soma dessas arestas deve ser a menor possível.
  </p>
  <p class='vspace'><em>Observação:</em> Caso você não tenha entendido muito bem o que estamos estudando, sugiro que leia os enunciados dos problemas.</p>
  <div class='vspace'></div>
  <h3>Algoritmo de Prim</h3>
  <p><strong> Casos em que o Prim não funciona </strong></p>
  <p class='vspace'>O <em>Prim</em> pode obter uma resposta incorreta, dependedo da implementação, em grafos que sejam desconexos ou em grafos direcionais. Exemplos serão mostrados adiante.</p>
  <p class='vspace'><strong> O algoritmo </strong>
    Inicialmente escolhemos um vértice qualquer <em>INI</em> e marcamos ele como pertencente à árvore geradora mínima, para isto utilizamos o vetor <em>foi</em>.
  </p>
  <p class='vspace'>Após isto, verificamos qual é a aresta de custo mínimo que liga um vértice x pertencente à árvore geradora mínima( ou seja, está marcada no vetor <em>foi</em>) à um vértice y não pertencente à árvore geradora mínima, achada essa aresta,
    marcamos o vértice y que não pertencia e incluimos a aresta no subconjunto,repetimos a operação até que todos os vértices pertençam à árvore geradora mínima, ou seja, até que todos os vértces estejam marcados em <em>foi</em>.
  </p>
  <p class='vspace'><strong>Observação:</strong> Caso não tenha entendido muito bem, sugiro que tente dar uma olhada no exemplo com figuras que está mais abaixo.</p>
  <p class='vspace'><strong>Implementação:</strong>
    Esta implementação tem complexidade O(V²) e utilizamos uma matriz de adjacência.
  </p>
  <div class='vspace'></div>
  <div class='sourceblock ' id='sourceblock1'>
    <div class='sourceblocktext'>
      <div class="cpp"><span class="co2">#define MAX 1000</span><br />
        <span class="co2">#define INF 0x3f3f3f3f</span><br />
        <br />
        <span class="kw4">int</span> N<span class="sy4">;</span><br />
        <span class="kw4">int</span> grafo<span class="br0">&#91;</span>MAX<span class="br0">&#93;</span><span class="br0">&#91;</span>MAX<span class="br0">&#93;</span><span class="sy4">;</span><br />
        <span class="kw4">int</span> foi<span class="br0">&#91;</span>MAX<span class="br0">&#93;</span><span class="sy4">;</span><br />
        <br />
        <span class="kw4">int</span> prim<span class="br0">&#40;</span><span class="kw4">int</span> INI<span class="br0">&#41;</span> <span class="br0">&#123;</span><br />
        &nbsp; <span class="kw4">int</span> i, j, k, minimo<span class="sy1">=</span><span class="nu0">0</span><span class="sy4">;</span><br />
        &nbsp; <span class="kw4">int</span> custo <span class="sy1">=</span> <span class="nu0">0</span><span class="sy4">;</span> <span class="coMULTI">/* Representa o custo da árvore geradora mínima */</span><br />
        <br />
        &nbsp; <span class="kw1">for</span> <span class="br0">&#40;</span>i <span class="sy1">=</span> <span class="nu0">0</span> <span class="sy4">;</span> i <span class="sy1">&lt;</span> N<span class="sy4">;</span> i<span class="sy2">++</span><span class="br0">&#41;</span> <span class="br0">&#123;</span> <span class="coMULTI">/* inicializa foi*/</span><br />
        &nbsp; &nbsp; foi<span class="br0">&#91;</span>i<span class="br0">&#93;</span> <span class="sy1">=</span> <span class="nu0">0</span><span class="sy4">;</span><br />
        &nbsp; <span class="br0">&#125;</span><br />
        <br />
        &nbsp; foi<span class="br0">&#91;</span>INI<span class="br0">&#93;</span> <span class="sy1">=</span> <span class="nu0">1</span><span class="sy4">;</span> <span class="coMULTI">/* Adicionamos INI */</span><br />
        &nbsp; k <span class="sy1">=</span> INI<span class="sy4">;</span><br />
        &nbsp; minimo <span class="sy1">=</span> <span class="nu0">0</span><span class="sy4">;</span><br />
        <br />
        &nbsp; <span class="kw1">do</span><span class="br0">&#123;</span><br />
        &nbsp; &nbsp; &nbsp;custo <span class="sy2">+</span><span class="sy1">=</span> mininimo<span class="sy4">;</span><br />
        &nbsp; &nbsp; &nbsp;foi<span class="br0">&#91;</span>k<span class="br0">&#93;</span> <span class="sy1">=</span> <span class="nu0">1</span><span class="sy4">;</span><br />
        &nbsp; &nbsp; &nbsp;mininimo <span class="sy1">=</span> INF<span class="sy4">;</span><br />
        <br />
        &nbsp; &nbsp; &nbsp;<span class="kw1">for</span> <span class="br0">&#40;</span>i <span class="sy1">=</span> <span class="nu0">0</span><span class="sy4">;</span> i <span class="sy1">&lt;</span> N<span class="sy4">;</span> i<span class="sy2">++</span><span class="br0">&#41;</span><br />
        &nbsp; &nbsp; &nbsp; <span class="kw1">if</span> <span class="br0">&#40;</span>foi<span class="br0">&#91;</span>i<span class="br0">&#93;</span><span class="br0">&#41;</span> &nbsp;<span class="coMULTI">/* Vértice pertencente à árvore geradora mínima */</span><br />
        &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">for</span> <span class="br0">&#40;</span>j <span class="sy1">=</span> <span class="nu0">0</span><span class="sy4">;</span> j <span class="sy1">&lt;</span> N<span class="sy4">;</span> j<span class="sy2">++</span><span class="br0">&#41;</span><br />
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="kw1">if</span><span class="br0">&#40;</span><span class="sy3">!</span>foi<span class="br0">&#91;</span>j<span class="br0">&#93;</span> <span class="sy3">&amp;&amp;</span> grafo<span class="br0">&#91;</span>i<span class="br0">&#93;</span><span class="br0">&#91;</span>j<span class="br0">&#93;</span> <span class="sy1">&lt;</span> mininimo<span class="br0">&#41;</span><span class="br0">&#123;</span><br />
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;mininimo <span class="sy1">=</span> grafo<span class="br0">&#91;</span>i<span class="br0">&#93;</span><span class="br0">&#91;</span>j<span class="br0">&#93;</span><span class="sy4">;</span><br />
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;k <span class="sy1">=</span> j<span class="sy4">;</span><br />
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="br0">&#125;</span><br />
        &nbsp; <span class="br0">&#125;</span><span class="kw1">while</span> <span class="br0">&#40;</span>minimo<span class="sy3">!</span><span class="sy1">=</span>INF<span class="br0">&#41;</span><span class="sy4">;</span><br />
        <br />
        &nbsp; <span class="kw1">return</span> custo<span class="sy4">;</span><br />
        <span class="br0">&#125;</span>
      </div>
    </div>
    <div class='sourceblocklink'><a href='index.php%3Fn=Parte5.ArvoreGeradoraMinima%3Faction=sourceblock&amp;num=1' type='text/plain'>[&#036;[Get Code]]</a></div>
  </div>
  <p class='vspace'><em>Exemplos</em>:</p>
  <p class='vspace'>Aqui temos um exemplo de como o algoritmo procede.</p>
  <p class='vspace'><em>Observações</em>:</p>
  <div class='vspace'></div>
  <ul>
    <li>O conjunto que está em <strong>foi</strong> é simbolizado pelos vértices em vermelho;</li>
    <li>Os vértices em azul são os vértices da vez, ou seja, aqueles que ligam um vértice vermelho a um vértice não vermelho, esses vértices são os condidatos à próximo vértice e devemos escolher o de menor custo</li>
  </ul>
  <p class='vspace'><em>INI = 1</em></p>
  <table border='1' cellpadding='5' cellspacing='0' width='50%' >
    <tr>
      <td  valign='top'>
        <?php echo '<img src="' . URL . 'public/img/sections/19/grafo_00.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
        <p class='vspace'>1. o grafo inicial</p>
        <div class='vspace'></div>
      </td>
      <td  valign='top'>
        <?php echo '<img src="' . URL . 'public/img/sections/19/grafo_01.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
        <div class='vspace'></div>
        <pre>  2. foi = foi U {1}
</pre>
      </td>
    </tr>
    <tr>
      <td  valign='top'>
        <?php echo '<img src="' . URL . 'public/img/sections/19/grafo_02.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
        <p class='vspace'>3. a aresta de custo 5 é menor que liga um vértice vermelho a um cinza</p>
      </td>
      <td  valign='top'>
        <?php echo '<img src="' . URL . 'public/img/sections/19/grafo_03.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
        <p class='vspace'>4. foi = foi U {3}</p>
      </td>
    </tr>
    <tr>
      <td  valign='top'>
        <?php echo '<img src="' . URL . 'public/img/sections/19/grafo_04.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
        <p class='vspace'>5. a aresta de custo 4 é menor que liga um vértice vermelho a um cinza</p>
      </td>
      <td  valign='top'>
        <?php echo '<img src="' . URL . 'public/img/sections/19/grafo_05.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
        <p class='vspace'>6. foi = foi U {2}</p>
      </td>
    </tr>
    <tr>
      <td  valign='top'>
        <?php echo '<img src="' . URL . 'public/img/sections/19/grafo_06.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
        <p class='vspace'>7. Agora temos duas arestas de mesmo custo mínimo,que liga um vértice vermelho a um cinza.Escolhemos uma aleatóriamente.</p>
      </td>
      <td  valign='top'>
        <?php echo '<img src="' . URL . 'public/img/sections/19/grafo_07.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
        <p class='vspace'>8. 8.foi = foi U {4}</p>
      </td>
    </tr>
    <tr>
      <td  valign='top'>
        <?php echo '<img src="' . URL . 'public/img/sections/19/grafo_08.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
        <p class='vspace'>9. a aresta de custo 5 é menor que liga um vértice vermelho a um cinza</p>
      </td>
      <td  valign='top'>
        <?php echo '<img src="' . URL . 'public/img/sections/19/grafo_09.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
        <p class='vspace'>10. foi = foi U {5}</p>
      </td>
    </tr>
    <tr>
      <td  valign='top'>
        <?php echo '<img src="' . URL . 'public/img/sections/19/grafo_10.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
        <p class='vspace'>11. a aresta de custo 1 é menor que liga um vértice vermelho a um cinza</p>
      </td>
      <td  valign='top'>
        <?php echo '<img src="' . URL . 'public/img/sections/19/grafo_11.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
        <p class='vspace'>12. foi = foi U {6} e todos os vértices estão vermelho</p>
      </td>
    </tr>
  </table>
  <p><em>Dois casos em que este algoritmo não funciona:</em></p>
  <div class='vspace'></div>
  <ul>
    <li>Grafo Desconexo</li>
  </ul>
  <div><?php echo '<img src="' . URL . 'public/img/sections/19/grafo_desconexo.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' /></div>
  <p class='vspace'><em>Contornando o Problema:</em></p>
  <p class='vspace'>Se o grafo for desconexo,ao executarmos o Prim teremos vértices que não serão marcados com o <em>foi</em>, então basta executarmos o algoritmo novamente partindo de qualquer vértice que não foi marcado. Repetindo isto, até que todos os vértices sejam visitados.</p>
  <p class='vspace'>Se procedermos da maneira mencionada no exemplo acima, obteremos a seguinte resposta:</p>
  <div><<?php echo '<img src="' . URL . 'public/img/sections/19/grafo_desconexo_resolvido.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' /></div>
  <div class='vspace'></div>
  <ul>
    <li>Grafo Direcionado (ou Digrafo)</li>
  </ul>
  <div><?php echo '<img src="' . URL . 'public/img/sections/19/grafo_digrafo.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' /></div>
  <p class='vspace'><em> Ainda não entendi... </em></p>
  <p class='vspace'>Se ainda não compreendeu muito bem, sugiro que tente dar uma olhada no applet que se encontra em "Referências". E em cada passo tente prever o que será efetuado.</p>
  <p class='vspace'><em> Por que funciona? </em></p>
  <p class='vspace'>Vamos considerar S, como o subgrafo obtido até então, utilizando o algoritmo mencionado. Imagine que temos dois vértices que ainda não foram adicionados X e Y. A <em> aresta de menor custo</em> que liga um vértice pertencente a S ao vértice X tem custo <em>a</em> e a que liga ao vértice Y tem custo <em>b</em>.
    Suponhamos também que há uma aresta de custo <em>c</em> que liga X a Y, caso não exista o raciocínio é análogo
  </p>
  <div class='vspace'></div>
  <div><?php echo '<img src="' . URL . 'public/img/sections/19/funciona.png' . '"';?> alt='Exemplo de grafos, executando o algoritmo de Prim' title='Exemplo de grafos, executando o algoritmo de Prim' />
  </div>
  <p class='vspace'>Sem perda de generalidade, seja a &lt; b.</p>
  <p class='vspace'>O algoritmo nos diz que temos que adicionar <em>a</em> e <em>X</em>, mas suponhamos que adicionemos <em>b</em> e <em>Y</em>.</p>
  <p class='vspace'>No próximo passo, temos que escolher entre <em>a</em> e <em>c</em>.</p>
  <div class='vspace'></div>
  <ul>
    <li>Se c &lt; a, a melhor opção é escolher <em>c</em>, mas note que se escolhermos c, não estaremos obtendo a árvore geradora mínima, uma vez que se trocarmos <em>a</em> por <em>b</em>, a árvore geradora terá custo menor, o que sugere que nossa escolha da aresta <em>b</em> foi equivocada.</li>
    <li>Se a &lt;= c, a melhor opção é escolher <em>a</em>, se c &lt; b não estaremos obtendo uma árvore geradora mínima, pois agora podemos trocar <em>c</em> por <em>b</em>.</li>
  </ul>
  <p class='vspace'>Esta explicação foi para o caso em que faltam dois vértices, mas é fácil expandir para o caso em que faltam mais vértices.Pois, no final, todos os vértices terão que ser adicionados e se em algum momento não escolhermos a menor aresta, ao final poderemos efetuar a troca - como foi feita no exemplo,quando trocamos <em>a</em> por <em>b</em> - minimizando ou deixando igual a árvore geradora.Ou seja, sempre é melhor escolher a aresta de cuso mínimo.</p>
  <div class='vspace'></div>
  <h2>Referências:</h2>
  <p>Algumas referências importantes:</p>
  <ul>
    <li><a class='urllink' href='http://students.ceid.upatras.gr/~papagel/project/prim.htm' rel='nofollow'>Applet que mostra o funcionamento do algoritmo passo-a-passo em diversos exemplos</a></li>
    <li><a class='urllink' href='http://danielamaral.wikidot.com/o-problema-da-arvore-geradora-minima-agm#toc0' rel='nofollow'>O Problema da Árvore Geradora Mínima (AGM)</a></li>
    <li><a class='urllink' href='http://www.ime.usp.br/~pf/algoritmos_para_grafos/aulas/prim.html' rel='nofollow'>Algoritmo de Prim</a></li>
  </ul>
</div>
