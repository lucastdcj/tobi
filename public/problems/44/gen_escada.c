#include <stdio.h>
#include <stdlib.h>
#include <time.h>


main(int argc, char *argv[])
{
  int n, t, i, r, maxN, maxT;

  if (argc != 3) {
    printf("Uso: %s maxN maxT\nmaxN -> limite de N\nmaxT -> limite para T\n", argv[0]);
    exit(1);
  }

  srand(time(NULL));
  
  sscanf(argv[1], "%d", &maxN);
  sscanf(argv[2], "%d", &maxT);

  n = rand() % maxN + 1;
  printf("%d\n", n);
  
  t = 0;
  while (n > 0) {
    if (rand() % (maxT - t) <= n) {
      printf("%d\n", t);
      n --;
    }
    t ++;
  }
}
