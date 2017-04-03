#include <cstdio>
#include <cstdlib>
#include <ctime>
#include <cstring>

const int LIM = 5000000; // 5e6 * 2 int = 40 MB

int cnt[LIM * 2 + 1];
int mtx[1000][1000];
int N, S;
int nnonunique;

void update(int i, int j, int newval)
{
	int oldval = mtx[i][j];
	--cnt[oldval + LIM];
	if (cnt[oldval + LIM] == 1)
		--nnonunique;
	if (cnt[newval + LIM] == 1)
		++nnonunique;
	++cnt[newval + LIM];
	mtx[i][j] = newval;
}

int main()
{
	scanf(" %d %d", &N, &S);
	srandom(N*1000 + S);
	memset(mtx, 0, sizeof(mtx));
	memset(cnt, 0, sizeof(cnt));
	cnt[LIM] = N*N;
	if (cnt[LIM] > 1) nnonunique = 1;
	else nnonunique = 0;
	for (int j=0; j<N; ++j)
		update(N-1, j, S);
	// printf("%d %d\n", cnt[S+LIM], cnt[LIM]);
	// printf("%d\n", nnonunique);
	while (nnonunique > 0)
	{
		int delta = random() % (2*LIM + 1) - LIM;
		int row = random() % N;
		int col = random() % N;
		int x;
		bool ok = true;
		for (int i=0; i<N && ok; ++i)
			if ((x = mtx[i][col] + delta) < -LIM || x > LIM)
				ok = false;
		for (int j=0; j<N && ok; ++j)
			if ((x = mtx[row][j] - delta) < -LIM || x > LIM)
				ok = false;
		if (!ok) continue;
		for (int i=0; i<N; ++i)
			update(i, col, mtx[i][col] + delta);
		for (int j=0; j<N; ++j)
			update(row, j, mtx[row][j] - delta);
		// printf("%d\n", nnonunique);
		// for (int i=0; i<N; ++i)
		// {
		// 	for (int j=0; j<N; ++j)
		// 		printf("%d ", mtx[i][j]);
		// 	printf("\n");
		// }
	}
	for (int i=0; i<N; ++i)
	{
		for (int j=0; j<N; ++j)
			printf("%d ", mtx[i][j]);
		printf("\n");
	}
	return 0;
}
