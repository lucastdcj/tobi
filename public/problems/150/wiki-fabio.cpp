#include <stdio.h>

#include <algorithm>
#include <utility>

#include <string>
#include <map>
#include <queue>

using namespace std;

#define _foreach(it, b, e) for (typeof(b) it = (b); it != (e); it++)
#define foreach(x...) _foreach(x)

#define len(v) ((int)((v).size()))
#define wipe(v, x) memset((v), (x), sizeof(v));
#define all(v) (v).begin(), (v).end()

const int MAX_BUF = 100;
const int MAX_VT = 2002;
const int MAX_AR = 1002;
const int INF = 0x3f3f3f3f;

int M;
char buf[2][MAX_BUF];
map<string, int> idx;

int adj[MAX_VT][MAX_AR];
int nadj[MAX_VT];

int dist[MAX_VT];

void bfs(int ini) {
	queue<int> fila;
	fila.push(ini);

	wipe(dist, INF);
	dist[ini] = 0;

	while (!fila.empty()) {
		int no = fila.front(); fila.pop();
		for (int ar = 0; ar < nadj[no]; ar++) {
			int viz = adj[no][ar];
			if (dist[viz] < INF) continue;
			else {
				dist[viz] = dist[no] + 1;
				fila.push(viz);
			}
		}
	}
}

int acha(char *s) {
	if (!idx.count(s)) {
		int N = len(idx);
		idx[s] = N;
	}
	return idx[s];
}

void aresta(int a, int b) {
	adj[a][nadj[a]++] = b;
}

int main() {
	idx.clear();
	wipe(nadj, 0);

	scanf(" %d", &M);
	for (int i = 0; i < M; i++) {
		scanf(" %s %s", buf[0], buf[1]);
		int a = acha(buf[0]), b = acha(buf[1]);
		aresta(a, b);
	}

	scanf(" %s %s", buf[0], buf[1]);
	int orig = acha(buf[0]), dest = acha(buf[1]);
	foreach (it, all(idx)) {
		typeof(it) jt = it; jt++;
		if (jt == idx.end()) break;
		aresta(it->second, jt->second);
		aresta(jt->second, it->second);
	}

	bfs(orig);
	printf("%d\n", dist[dest]);

	return 0;
}
