#include <stdio.h>
#include <algorithm>
#include <vector>
#include <set>
#include <time.h>

using namespace std;

#define VOODOO_RAND (1+(rand()%1000000000))

int main(void)
{
    int c,n,i,j;
    set<int> temp;

    srand(time(NULL));
    c = 1+(rand()%10000);
    for(i = 0; i < c; i++)
        temp.insert(VOODOO_RAND);
    n = 1+(rand()%1000);

    vector<int>mojo(temp.begin(),temp.end());
    c = (int)mojo.size();
    printf("%d %d\n",c,n);
    for(i = 0; i < c; i++)
        printf("%d %d\n",mojo[i],VOODOO_RAND);

    for(i = 0; i < n; i++)
    {
        j = rand()%2;
        if (i && j)
        {
            j = rand()%c;
            printf("%d %d\n",mojo[j],VOODOO_RAND);
        }
        else printf("%d %d\n",VOODOO_RAND,VOODOO_RAND);
    }
    
    return(0);
}

