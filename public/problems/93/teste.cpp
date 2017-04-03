#include <iostream.h>

int main()
{
    int N,M;
    int i,j;
    scanf("%d %d",&N,&M);
    int A[N-1],F[N],m[M];

    for (i=0;i<N-1;i++)
    {
        scanf("%d",&A[i]);
    }

    for (i=0;i<N;i++)
    {
        scanf("%d",&F[i]);
    }


    for (i=0;i<M;i++)
    {
        scanf("%d",&m[i]);


    }
      for(j=0;j<M;j++)

        {

                        for(i=0;i<N-1;i++)
                        {
                           if (m[j]>=A[N-2])
                          {
                                        printf("%d ",F[N-1]);
                                        break;
                          }
                          if(m[j]<A[0])
                          {
                                     printf("%d ",F[0]);
                                     break;
                          }

                          if ( m[j] >= A[i-1] &&  m[j]<A[i] )
                          {
                                     printf("%d ",F[i]);
                                     break;
                          }


                          }

        }

}

