#include <cstdio>
#include <cstring>
#include <algorithm>
#include <queue>
#include <vector>

using namespace std;

int N;
int adj[202][202];
/*
Algoritmo que realiza N buscas (neste código são buscas em largura), 
aonde a estrutura para guardar as arestas é Matriz de Adjacência.
Complexidade: O(n^3)
*/
int main(){
	scanf("%d", &N);
	for(int i = 0; i < N-1; i++){
		int a,b;
		scanf("%d %d", &a, &b);
		adj[a][b] = 1;
		adj[b][a] = 1;
	}
	int marked[202], maior = 0;
	for(int i = 1; i <= N; i++){
		memset(marked,0,sizeof marked);
		queue<pair<int,int> >bfs;
		bfs.push(make_pair(0,i));
		while(!bfs.empty()){
			int custo = bfs.front().first, u = 
			bfs.front().second;
			bfs.pop();
			if(marked[u])continue;
			maior = max(maior, custo);
			marked[u] = 1;
			for(int v = 1; v <= N; v++){
				if(adj[u][v]){
					bfs.push(make_pair(custo+1, v));
				}
			}
		}
	}
	printf("%d\n", maior);
	return 0;
}
