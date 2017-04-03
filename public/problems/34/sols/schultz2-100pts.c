#include <stdio.h>
#include <stdbool.h>

typedef struct
{
  int x, y;
}
point_t;

typedef struct
{
  point_t p;
  int d;
}
hint_t;

#define KMAX 100
static hint_t H [KMAX];

static int
dist (point_t p, point_t q)
{
  int dx = q.x-p.x;
  if (dx < 0)
    dx = -dx;
  int dy = q.y-p.y;
  if (dy < 0)
    dy = -dy;
  return dx + dy;
}

int
main ()
{
  int n, k;
  scanf ("%d%d", &n, &k);
  for (int i = 0; i < k; ++i)
    scanf ("%d%d%d", &H[i].p.x, &H[i].p.y, &H[i].d);
  bool found = false;
  point_t treasure;
  for (int x = 0; x < n; ++x)
    for (int y = 0; y < n; ++y)
      {
        point_t p = {x, y};
        int i;
        for (i = 0; i < k; ++i)
          if (dist (p, H[i].p) != H[i].d)
            break;
        if (i == k)
          {
            if (found)
              goto many;
            found = true;
            treasure = p;
          }
      }
  printf ("%d %d\n", treasure.x, treasure.y);
  return 0;
many:
  puts ("-1 -1");
  return 0;
}


