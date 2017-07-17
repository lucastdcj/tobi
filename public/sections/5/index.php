<h1> 1.5 - Função e Ordenação</h1>
<h2> Material </h2>
<a href="http://noic.com.br/informatica/curso-noic-de-informatica/aula-4-funcoes/"> Funções - NOIC </a> <br>
<a href="https://www.ime.usp.br/~pf/algoritmos/aulas/ordena.html"> Ordenação: algoritmos elementares</a> <br>
<a href="https://pt.wikipedia.org/wiki/Insertion_sort"> Insertion Sort - Wikipedia</a> <br>
<a href="https://pt.wikipedia.org/wiki/Bubble_sort"> Bubble Sort - Wikipedia</a> <br>
<a href="https://pt.wikipedia.org/wiki/Merge_sort"> Merge Sort - Wikipedia</a> <br>
<a href="https://pt.wikipedia.org/wiki/Quicksort"> Quick Sort - Wikipedia</a> <br>
<a href="http://en.cppreference.com/w/cpp/algorithm/sort"> Sort C++ Reference (inglês)</a> <br>

<h2> Problema Exemplo </h2>
<b> Fatorial:</b> Escreva uma função recursiva que imprima o fatorial de um número.
<pre class="prettyprint"><?php echo htmlspecialchars('
// Note que poderia ser feito com um for apenas, mas é bom para treinar a ideia de recursão.
int fatorial(int x) {
  if (x == 0) return 1;
  return x * fatorial(x - 1);
}');?></pre>

<b> <a href="http://www.t-obi.com/problem/show/5/119">Tetris:</a></b> Neste problema é dado um campeonato com os nomes e pontos dos participantes e pede para imprimir o tabuleiro 
final, a ideia é simples, mas é muito bom para treinar o uso de algumas funções já definidas.
Ordenação: algoritmos elementares

<pre class="prettyprint"><?php echo htmlspecialchars('
#include <algorithm>
#include <cstdio>
#include <iostream>
#include <vector>
#include <string>

using namespace std;

struct Participante {
  Participante(string n, int p) {
    name = n;
    pontos = p;
  }
  string name;s
  int pontos;
};

// Funçao de comparação, ordena decrescente pela quantidade de ponto
// e crescente pelo nome.
bool cmp(const Participante& p1, const Participante& p2) {
  if (p1.pontos != p2.pontos) return p1.pontos > p2.pontos;
  return p1.name < p2.name;
}

int main() {
  int n, nt = 1;
  while (scanf(" %d", &n) == 1 && n != 0) {
    vector<Participante> participantes;
    for (int i = 0; i < n; i++) {
      string name;
      cin >> name;
      int pontos = 0;
      // Guarda a menor e a máxima pontuação.
      int min_pontos = -1, max_pontos = -1;
      for (int j = 0; j < 12; j++) {
        int x; scanf(" %d", &x);
        if (min_pontos == -1 || x < min_pontos) min_pontos = x;
        if (max_pontos == -1 || x > max_pontos) max_pontos = x;
        pontos += x;
      }
      participantes.push_back(Participante(name, pontos - min_pontos - max_pontos));
    }
    sort(participantes.begin(), participantes.end(), cmp);
    printf("Teste %d\n", nt++);
    for (int i = 0; i < n;) {
      int j = i;
      while (j < n && participantes[j].pontos == participantes[i].pontos) {
        printf("%d %d %s\n", i + 1, participantes[j].pontos, participantes[j].name.c_str());
        j++;
      }
      i = j;
    }
    printf("\n");
  }
  return 0;
}');?></pre>

<script src="http://www.t-obi.com/public/highlighter/prettify.js"></script>
<script>prettyPrint();</script>
