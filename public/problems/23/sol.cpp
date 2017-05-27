#include <stdio.h>

#define MAX 110

int main()
{
  int n;
  int m[MAX][MAX];
  int tmp;
  int i,j;

  scanf("%d",&n);

  for(i=0;i<n;++i)
    for(j=0;j<n;++j)
      scanf("%d",&m[i][j]);

  for(i=0;i<n;++i)
    for(j=0;j<n;++j)
    {
      scanf("%d",&tmp);
      m[i][j]+=tmp;
    }

  for(i=0;i<n;++i)
  {
    for(j=0;j<n;++j) {
      if (j) printf(" ");
      printf("%d",m[i][j]);
  }
    printf("\n");
  }

  return 0;
}

