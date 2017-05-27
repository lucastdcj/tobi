#include <bits/stdc++.h>

using namespace std;

#define DEBUG_ON 0

#define INF 0x3f3f3f3f
#define REP(i,n) for(int i = 0; i < (n); ++i)
#define REPD(i,n) for(int i = (n)-1; i >= 0; --i)
#define R(x) scanf(" %d",&x)
#define RR(x,y) scanf(" %d %d",&x,&y)
#define DBG(x) if(DEBUG_ON) cout << #x << " == " << x << endl

typedef long long ll;
typedef pair<int,int> ii;

int main() {
  int a,b,c, d;
  while (scanf(" %d %d %d %d", &a ,&b, &c, &d) == 4)  {
    int vagas = (a-c+1)*b;
    int antes = (c-1)*b;
    int pos = d - 1;

    if (pos >= vagas) printf("PROXIMO VOO\n");
    else printf("%d %c\n",pos/b + c, pos%b + 'A');
  }
  
  return 0;
}

