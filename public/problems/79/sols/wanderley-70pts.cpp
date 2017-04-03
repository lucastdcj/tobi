#include <stdio.h>
#include <algorithm>
using namespace std;

#define MAX 1000010

int s[MAX];

int main () {
   int n, m, ini, fim, i, j;
   long long soma;
   char c;

   scanf ("%d %d", &n, &m);

   for (i = 1; i <= n; i++) {
      s[i] = i;
   }
   while (m--) {
      scanf (" %c %d %d ", &c, &ini, &fim);
      //printf ("%c %d %d :: ", c, ini, fim);
      if (c == 'I') {
         for (i = ini, j = fim; i < j; i++, j--) {
            swap (s[i], s[j]);
         }
         /*for (i = 1; i <= n; i++) {
            printf ("%d ", s[i]);
         } printf ("\n");*/
      } else {
         soma = 0;
         for (i = ini; i <= fim; i++) {
            soma += s[i];
         }
         printf ("%lld\n", soma);
      }
   }
   return 0;
}
