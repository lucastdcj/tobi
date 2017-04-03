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
  int acao, n;

  R(n);  
  queue<int> q;
  int aux = 0;
  REP(i,4) {
    R(acao);
    q.push(acao);
    aux += acao;
    n--;
  }
  int ans = aux;
  while (n--) {
    R(acao);
    aux = aux + acao - q.front();
    q.pop();
    q.push(acao);
    ans = max(ans, aux);    
  }
  printf("%d\n",ans);

  return 0;
}

