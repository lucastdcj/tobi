#include <cstdio>


int main()
{
  int n, m;

  scanf(" %d %d", &n, &m);

  int r = -1, melhor = (1<<30);
  for(int i = 0; i < n; i++){
    int at = 0, x;
    for(int j = 0; j < m; j++){
      scanf(" %d", &x);
      at += x;
    }
    if(at < melhor){
      r = i+1;
      melhor = at;
    }
  }
  printf("%d\n", r);
  return 0;
}
