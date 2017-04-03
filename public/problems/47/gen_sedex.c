#include <stdio.h>
#include <stdlib.h>
#include <time.h>

main(int argc, char *argv[])
{
  int max, diametro, altura, largura, profundidade;
  char res;
  
  if (argc != 3) {
    printf("Uso: %s max res\nmax -> valor maximo dos numeros entradas\nres -> resposta esperada\n", argv[0]);
    exit(1);
  }

  srand(time(NULL));
  
  max = 10000;
  sscanf(argv[1], "%d", &max);
  res = argv[2][0];
  
  diametro = rand() % max + 1;
  if (res == 's') {
    altura = rand() % (max - diametro) + diametro;
    largura = rand() % (max - diametro) + diametro;
    profundidade = rand() % (max - diametro) + diametro;
  }
  else {
    altura = rand() % diametro;
    largura = rand() % diametro;
    profundidade = rand() % diametro;
  }
  
  printf("%d\n%d %d %d\n", diametro, altura, largura, profundidade);
}
