#include <stdio.h>

int
main ()
{
  int a, b, c;
  scanf ("%d%d%d", &a, &b, &c);
  if (a < b)
    {
      int t = a;
      a = b;
      b = t;
    }
  if (a < c)
    {
      int t = a;
      a = c;
      c = t;
    }
  char x;
  if (b+c <= a)
    x = 'n';
  else
    {
      int d = a*a - b*b - c*c;
      if (d < 0)
        x = 'a';
      else if (d == 0)
        x = 'r';
      else
        x = 'o';
    }
  putchar (x);
  putchar ('\n');
  return 0;
}


