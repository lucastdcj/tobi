#include <cstdio>
#include <cstdlib>
#include <algorithm>
#include <set>
using namespace std;

int reference[][3][3] =
{
	{
		{0},
	},
	{
		{2, -4},
		{4, -2},
	},
	{
		{7, 4, 5},
		{3, 0, 1},
		{-5, -8, -7},
	},
};

int main()
{
	int N, S;
	scanf(" %d %d", &N, &S);
	srandom(N*2001 + S);
	static int mtx[1000][1000];

	if (N > 3) return 0;

	for (int i=0; i<N; ++i)
		for (int j=0; j<N; ++j)
			mtx[i][j] = reference[N-1][i][j];
	
	for (int i=0; i<N; ++i)
		for (int j=0; j<N; ++j)
			if (S >= 0) mtx[i][j] -= 333;
			else mtx[i][j] += 333;
	int curs = 0;
	for (int i=0; i<N; ++i)
		curs += mtx[i][i];
	for (int i=0; i<N; ++i)
		mtx[0][i] += S - curs;
	
	for (int i=0; i<N; ++i)
	{
		for (int j=0; j<N; ++j)
			printf("%d ", mtx[i][j]);
		printf("\n");
	}
	return 0;
}
