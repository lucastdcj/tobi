#include <cstdio>

int main()
{
	int N, S;
	scanf(" %d %d", &N, &S);
	
	static int v[1000] = {0}, h[1000] = {0};
	for (int i=0; i<N/2; ++i)
	{
		v[i] = -N/2 + i;
		v[N-i-1] = N/2 - i;
	}
	for (int i=0; i<N; ++i)
	{
		h[i] = v[i] * 3000;
		if (v[i] == 0 || (v[i] == 1 && N % 2 == 0))
			h[i] += S;
	}

	for (int i=0; i<N; ++i)
	{
		for (int j=0; j<N; ++j)
			printf("%d ", v[i] + h[j]);
		printf("\n");
	}
	
	return 0;
}
