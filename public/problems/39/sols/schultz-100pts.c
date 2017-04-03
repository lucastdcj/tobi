#include <stdio.h>

int
main ()
{
  int n, s, i, j;
  scanf ("%d%d", &n, &s);
  if (n == 1)
    printf ("%d\n", s);
  else
    {
      int x = (n+1)*((n*(n-1))>>1);
      if (x > s)
        {
          for (j = 0; j < n; ++j)
            printf ("%d%c", j-(x-s), j == n-1 ? '\n' : ' ');
          for (i = 1; i < n; ++i)
            for (j = 0; j < n; ++j)
              printf ("%d%c", n*i+j, j == n-1 ? '\n' : ' ');
        }
      else
        {
          for (i = 0; i < n-1; ++i)
            for (j = 0; j < n; ++j)
              printf ("%d%c", n*i+j, j == n-1 ? '\n' : ' ');
          for (j = 0; j < n; ++j)
            printf ("%d%c", n*(n-1)+j+(s-x), j == n-1 ? '\n': ' ');
        }
    }
  return 0;
}


