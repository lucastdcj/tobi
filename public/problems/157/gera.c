#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>

#define MOJO 10100
int arvore[MOJO],foi[MOJO],primo[MOJO],n;

void gera(int pai, int N)
{
    int i,u,v;

    /* escolhe raiz */
    do
    {
        u = 1+(rand()%n);
    } while(foi[u]);
    foi[u] = 1;
    arvore[u] = pai;

    /* fim da recursao */
    if (N == 1) return;

    if (primo[N-1])
    {
        /* escolhe se sao N-1 filhos de peso 1 ou 1 filho de peso N-1 */
        v = rand()%4;
        if (v) gera(u,N-1);
        else for (i = 0; i < N-1; i++)
            gera(u,1);
    }
    else
    {
        /* acha algum fator de N-1 (de 2 a N-2) */
        do
        {
            v = 2+(rand()%(N-3));
        } while ((N-1)%v > 0);
        for(i = 0; i < v; i++)
            gera(u,(N-1)/v);
    }
}

void criva(void)
{
    int i,j;

    memset(primo,1,sizeof(primo));
    for(i = 2; i < MOJO; i++)
        if (primo[i])
            for(j = 2*i; j < MOJO; j += i)
                primo[j] = 0;
}

int main(void)
{
    int i,u,v,bem;
    
    srand(time(NULL));
    criva();
    
    scanf("%d",&bem);
    scanf("%d",&n);
    printf("%d\n",n);

    memset(arvore,0x3f,sizeof(arvore));
    memset(foi,0,sizeof(foi));
    if (bem)
    {
        gera(0,n);
    }
    else
    {
        for(i = 0; i < n; i++)
        {
            do
            {
                u = 1+(rand()%n);
            } while(foi[u]);
            foi[u] = 1;

            if (!i) v = 0;
            else
            {
                do
                {
                    v = rand()%(n+1);
                } while (!foi[v] || u == v);
            }
            
            arvore[u] = v;
        }
    }
    
    /* imprime resultados */
    memset(foi,0,sizeof(foi));
    for(i = 0; i < n; i++)
    {
        do
        {
            u = 1+(rand()%n);
        } while(foi[u]);
        foi[u] = 1;
        printf("%d %d\n",u,arvore[u]);
    }
    
    return(0);
}

