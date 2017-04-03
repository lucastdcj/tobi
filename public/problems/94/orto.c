#include <stdio.h>
#include <string.h>
#include <math.h>


char dic[1123][30], pal[30];
int d[30][30];

#define min(a,b) ((a) < (b) ? (a) : (b))


int dist(int ndic){
	int i,j,n,m;
	n=strlen(pal);
	m=strlen(dic[ndic]);

	for(i=0;i<=n;i++) d[i][0] = i;
	for(i=0;i<=m;i++) d[0][i] = i;

	for(i=1;i<=n;i++){
		for(j=1;j<=m;j++){
			
			int cost=1;
			if(pal[i-1] == dic[ndic][j-1]){
				cost = 0;
			}

			d[i][j] = min(d[i-1][j]+1, min(d[i][j-1]+1, d[i-1][j-1]+cost));

		}
	}

	return d[n][m];
}


int main(void){
	int n,m,i,j;
	scanf("%d %d", &n, &m);
	for(i=0;i<n;i++) scanf("%s",dic[i]);
	for(i=0;i<m;i++){
		int ja = 0;
		scanf("%s",pal);
		for(j=0;j<n;j++){
			if(dist(j) <= 2){
				if(ja) printf(" ");
				else ja = 1;
				printf("%s",dic[j]);
			}
		}

		printf("\n");
	}

	return 0;

}
