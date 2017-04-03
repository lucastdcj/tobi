#include <cstdio>
#include <vector>
#include <algorithm>

using namespace std;

const int MAXN = 1000010;

int N;
vector<int> G[MAXN];
int answer;

int dfs(int last, int v, int biggest_before) {
    int biggest_after = 0;

    for (int i = 0; i < G[v].size(); ++i) {
        int u = G[v][i];
        if (u == last) continue;
        biggest_after = max(biggest_after, 1 + dfs(v, u, max(biggest_after + 1, biggest_before + 1)));
    }

    answer = max(answer, biggest_before + biggest_after);

    return biggest_after;
}

int main() {

    scanf("%d", &N);

    for (int i = 1; i < N; ++i) {
        int a, b;
        scanf("%d %d", &a, &b);
        G[a].push_back(b);
        G[b].push_back(a);
    }

    answer = 0;
    dfs(-1, 1, 0);

    printf("%d\n", answer);

    return 0;
}
