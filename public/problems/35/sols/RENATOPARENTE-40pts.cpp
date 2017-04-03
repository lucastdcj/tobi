#include <cstdio>
#include <cstring>
#include <algorithm>
#include <queue>
#include <vector>

using namespace std;

int N;
vector<int> adj[1001];
/*
Algoritmo parecido com a solução de 20pts, sendo que utiliza lista de 
adjacência e faz busca a partir dos N vértices do grafo. Complexidade: 
O(n^2)

*/
int main(){
	scanf("%d", &N);
	for(int i = 0; i < N-1; i++){
		int a,b;
		scanf("%d %d", &a, &b);
		adj[a].push_back(b);
		adj[b].push_back(a);
	}
	int marked[1001], maior = 0;
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
			for(int i = 0; i < adj[u].size(); i++){
				bfs.push(make_pair(custo+1, adj[u][i]));
			}
		}
	}
	printf("%d\n", maior);
	return 0;
}
