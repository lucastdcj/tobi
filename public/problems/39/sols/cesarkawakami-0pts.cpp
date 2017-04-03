#include <cstdio>
#include <cstdlib>
#include <ctime>
#include <cstring>

int main()
{
	int N, S;
	scanf(" %d %d", &N, &S);
	srand(N*1000 + S);
	int delta = S - N * (1 + N*N) / 2;
	int current = 1;
	static int mtx[1000][1000];
	for (int i=0; i<N; ++i)
	{
		for (int j=0; j<N; ++j)
			if (i == 0 && delta < 0)
				mtx[i][j] = current++ + delta;
			else if (i == N-1 && delta > 0)
				mtx[i][j] = current++ + delta;
			else
				mtx[i][j] = current++;
	}
	switch (rand() % 4)
	{
	case 0:
		// only one cell wrong
		--mtx[0][0];
		break;
	case 1:
		// wrong sum
		for (int i=0; i<N; ++i)
			--mtx[0][i];
		break;
	case 2:
		// wrong N
		--N;
		break;
	case 3:
		// almost correct, repeated values
		memset(mtx, 0, sizeof(mtx));
		for (int i=0; i<N; ++i)
			mtx[0][i] = S;
		if (N == 1)
			--mtx[0][0]; // just to guarantee that this solution gets 0 points
		break;
	}
	for (int i=0; i<N; ++i)
	{
		for (int j=0; j<N; ++j)
			printf("%d ", mtx[i][j]);
		printf("\n");
	}
	return 0;
}
