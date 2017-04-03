/* dengue.c   -  por Guilherme Ottoni */

#include <stdio.h>
#include <string.h>

#define MAX_VERTICES 110

int main(void)
{
  int grau[MAX_VERTICES];
  int soma_adjs[MAX_VERTICES];
  int fila_verts[MAX_VERTICES];
  int ifila, ffila;
  int n, x, y, v, teste=1;

  while (scanf("%d",&n) == 1 && n > 0)
  {
    memset(soma_adjs,0,sizeof(soma_adjs));
    memset(grau,0,sizeof(grau));
    for (v=0; v < n-1; v++)
    {
      scanf("%d %d",&x,&y);
      x--; y--;
      soma_adjs[x] += y;
      soma_adjs[y] += x;
      grau[x]++;
      grau[y]++;
    }
    if (n == 1)
      printf("Teste %d\n1\n\n",teste++);
    else
    {  
      ifila = ffila = 0;
      for (v=0; v < n; v++)
        if (grau[v] == 1)
          fila_verts[ffila++] = v;
      while (ffila < n)
      {
        v = fila_verts[ifila];
        grau[soma_adjs[v]]--;
        soma_adjs[soma_adjs[v]] -= v;
        if (grau[soma_adjs[v]] == 1)
          fila_verts[ffila++] = soma_adjs[v];
        grau[v] = 0;
        ifila++;
      }
      printf("Teste %d\n%d\n\n",teste++,fila_verts[n-1]+1);
    }  
  }
  return 0;
}


