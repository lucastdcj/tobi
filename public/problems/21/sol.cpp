#include <cstdio>

int potencia(int b, int e)
{
  if(e == 0) return 1;
  int r = potencia(b, e/2);
  r *= r;
  if(e % 2 == 1)
    r *= b;
  return r;
}

int main()
{
  int n;
  scanf(" %d", &n);
  int conta[4] = {0,0,0,0};
  int p[4] = {2,3,5,7};

  while(n--){
    int x;
    char op;
    scanf(" %d %c", &x, &op);
    if(x == 0){
      printf("0\n");
      return 0;
    }

    int s = ((op=='*') ? 1 : -1);
    for(int i = 0; i < 4; i++){
      while(x % p[i] == 0){
        conta[i] += s;
        x /= p[i];
      }
    }
  }

  int r = 1;
  for(int i = 0; i < 4; i++)
    r *= potencia(p[i], conta[i]);
  printf("%d\n", r);
  return 0;
}
