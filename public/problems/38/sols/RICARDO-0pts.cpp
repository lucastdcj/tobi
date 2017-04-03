/*
 * Solucao que deve ganhar 0 pontos.
 *
 * apenas calcula a soma das areas dos retangulos individualmente
 */

#include <stdio.h>

#define MAX 110

int main()
{
	int xi,xf,yi,yf;
	int n;
	int area = 0;

	scanf("%d",&n);

	for(int i=0;i<n;++i)
	{
		scanf("%d %d %d %d",&xi,&xf,&yi,&yf);
		area += (xf-xi)*(yf-yi);
	}

	printf("%d\n",area);

	return 0;
}

