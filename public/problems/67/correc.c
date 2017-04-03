/* Uso: ./corretor input output_juiz < output_competidor */
#include <stdio.h>
#include <string.h>

#define MAXN 1234

int A[MAXN][MAXN];

#define between(lo, up, x) ((lo) <= (x) && (x) <= (up))

int main(int argc, char **argv) {
  int n, m, a, b, c;
  int i,j;
  FILE *in, *out;
  int res_juiz, res_com;

  in = fopen(argv[1], "r");

  memset(A, 0, sizeof(A));
  fscanf(in, "%d%d", &n, &m);
  for (i = 0; i < m; i++) {
    int u, v, e;
    fscanf(in, " %d%d%d", &u, &v, &e);
    A[u][v] = A[v][u] = e;
  }

  /*
  for (i=0; i<n; i++) {
    for (j=0; j<n; j++) {
      fprintf(stderr,"%d ",A[i][j]);
    }
    fprintf(stderr,"\n");
  }
  */
  fclose(in);
  out = fopen(argv[2], "r");
  
  fscanf(out, " %d%d%d", &a, &b, &c);
  res_juiz = A[a][b] + A[b][c] + A[c][a];
  fprintf(stderr, "res_juiz=%d (%d, %d, %d)\n", res_juiz,a,b,c);
  
  fclose(out);
  
  if (scanf(" %d%d%d%*d", &a, &b, &c) != 3) {
    fprintf(stderr, "Resposta errada (numero de inteiros na saida != 3)\n");
    return 1;
  }

  if (!between(1, n, a) || !between(1, n, b) || !between(1, n, c)) {
    fprintf(stderr, "Resposta errada (numero dos vertices invalidos)\n");
    return 1;
  }

  res_com = A[a][b] + A[b][c] + A[c][a];
  fprintf(stderr, "res_com=%d (%d, %d, %d)\n", res_com,a,b,c);

  if (res_juiz != res_com) {
    fprintf(stderr, "Resposta errada (entrosamento diferente)\n");
    return 1;
  }    

  fprintf(stderr, "Resposta correta\n");
  return 0;
}
