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
  int n, precisa;
  scanf(" %d %d", &n, &precisa);
  int ans = 0;
  REP(i,n) {
    int a, b;
    scanf(" %d %d", &a, &b);
    if (a + b >= precisa) ans++;
  }
  printf("%d\n",ans);
  return 0;
}

