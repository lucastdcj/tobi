#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define MOJO 1024
int mojo[MOJO];

int main(void)
{
    int i,j,t,p,n;

    srand(time(NULL));
    scanf("%d %d %d",&t,&p,&n);
    for(i = 0; i < p; i++)
        mojo[i] = (n/p)+(i < (n%p));

    if (p < 1) p = 1;
    if (n < 1) n = 1;
    printf("%d %d\n",p,n);
    for(i = 0; i < n; i++)
    {
        j = rand()%p;
        if (t && !mojo[j])
        {
            i--;
            continue;
        }
        printf("%d\n",j+1);
        mojo[j]--;
    }
    
    return(0);
}

