/*
 * Solucao que considera apenas interseccao entre retangulos 2 a 2
 *
 * Nao sei ao certo ainda qual deve ser sua pontuacao
 */
#include <stdio.h>
#include <algorithm>

using namespace std;

#define MAX 110

int main()
{
	int xi[MAX],xf[MAX],yi[MAX],yf[MAX];
	int dx,dy;
	int i,j;
	int n;
	int area = 0;

	scanf("%d",&n);

	for(i=0;i<n;++i)
	{
		scanf("%d %d %d %d",&xi[i],&xf[i],&yi[i],&yf[i]);
		area+=(xf[i]-xi[i])*(yf[i]-yi[i]);
		for(j=0;j<i;++j)
		{
			dx=min(xf[i],xf[j])-max(xi[i],xi[j]);
			dy=min(yf[i],yf[j])-max(yi[i],yi[j]);
			if(dx>0 && dy>0)
				area-=dx*dy;
		}
	}

	printf("%d\n",area);

	return 0;
}

