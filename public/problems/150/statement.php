<p align="justify">

<p>A Uiquipédia (Wikipedia em inglês), fundada em 2001 por Jimmy Wales e Larry Sanger, é um site onde qualquer
pessoa pode editar os artigos, fazendo correções ou ampliando seu conteúdo.</p>
<p>Uma das grandes vantagens da Uiquipédia sobre enciclopédias de papel é a facilidade de seguir <b>referências</b>;
com um simples clique, é possível ir de um artigo para outro relacionado. Essas referências são chamadas de
referências diretas. Também é possível navegar a Uiquipédia sequencialmente: cada artigo possui referência
para o artigo anterior e para o posterior, na ordem alfabética. Essas referências são chamadas de referências
sequenciais.</p>
<p>Por exemplo, um artigo para o termo "Elefante" pode ter uma referencia direta para "Mamiferos" em seu
texto, desta forma pode-se chegar de "Elefante" a "Mamiferos" em um clique. Observe que pode não existir a
referência direta contrária, ou seja, de "Mamiferos" para "Elefante". Adicionalmente se "Elevador" é o próximo
artigo depois de "Elefante", na ordem alfabética, pode-se ir com um clique de "Elefante" para "Elevador" e de
"Elevador" para "Elefante", pois há uma referência sequencial entre eles.</p>
<p>Paulo e André são dois amigos que contribuem para a Uiquipédia. Muitas vezes, André edita um artigo e
quer que Paulo o ajude a revisar a modificação. A conexão de Paulo à Internet é discada, e por isso ele quer
chegar na página que André editou usando o menor número de cliques possível, começando do artigo em que
está, e navegando apenas por referências, diretas ou sequenciais.</p>

<h3>Tarefa</h3>
<p>Escreva um programa que, dados todas as referências diretas existentes na Uiquipédia, a página onde Paulo
está, e a página editada por André, determina de quantos cliques Paulo precisa, no mínimo, para ver a página
que foi modificada por André, utilizando as referências diretas e sequenciais.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha contém um único inteiro, <i>N</i> , que é o número de referências da Uiquipédia (1 &le;
<i>N</i> &le; 1.000). As <i>N</i> linhas contém cada uma duas strings <i>X</i> e <i>Y</i> , separadas por um espaço, que são os nomes
de duas páginas da Uiquipédia conectadas por uma referência direta (de <i>X</i> para <i>Y</i> ). Todo artigo existente
na Uiquipédia aparece pelo menos uma vez na descrição das referencias diretas, permitindo que as referencias
sequenciais sejam extraídas das informações dadas. Note que uma referência direta pode ligar duas páginas que
estariam ligadas também por uma referência sequencial.</p>
<p>Depois da descrição das referências, há uma linha em branco, e a linha seguinte contém duas cadeias de
caracteres, P e A, que são a página atual de Paulo e a página editada por André. O nome de cada página é
limitado a 100 caracteres e contém somente letras maiúsculas, letras minusculas e o símbolo '_'. Observe que na
ordem alfabética o simbolo '_' é anterior às letras maiúsculas, que por sua vez são anteriores às letras minusculas</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo um único inteiro, que diz o número
mínimo de cliques que são necessários para ir da página atual de Paulo até a página editada por André. Sempre
é possível navegar de um artigo a outro.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3
Pink_Floyd O_Lado_Escuro_Da_Lua
Pink_Floyd O_Muro
O_Muro Muro_de_Berlim

O_Muro O_Lado_Escuro_Da_Lua
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1
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
4
Chaves Quico
Quico Chiquinha
Professor_Girafales Dona_Florinda
Chaves Dona_Clotilde

Chaves Chiquinha
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
2
      </pre>
    </td>
  </tr>
</table>

</p>
