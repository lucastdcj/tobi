#include <stdio.h>

#include <set>

using namespace std;

set<pair<int,int> > mark;
set<int> mark2;

int n, m, inv[3010][2], ni;

int getval(int a) {
    for (int i = ni-1; i >= 0; i--) {
        if (a <= inv[i][1] && a >= inv[i][0]) {
            a = inv[i][0] + inv[i][1] - a;
        }
    }
    return a;
}


int getval2(int a, int b) {
    for (int i = b; i < ni; i++) {
        if (a <= inv[i][1] && a >= inv[i][0]) {
            a = inv[i][0] + inv[i][1] - a;
        }
    }
    return a;
}


long long sumr(int a, int b) {
    long long ma = min(a,b);
    long long mb = max(a,b);
    //printf("ma %lld mb %lld\n", mb, ma);
    return (ma+mb)*(mb-ma+1LL)/2LL;
}

long long sum(int a, int b) {
    int va, vb, pb, pa;
    pa = a;
    long long su = 0;

    mark2.clear();
    for (typeof(mark.begin()) it = mark.begin(); it != mark.end(); ++it) {
        mark2.insert(getval2((*it).first, (*it).second));
    }

    while (pa <= b) {
        va = getval(pa);
        typeof(mark2.begin()) it = mark2.lower_bound(pa);
        if (it == mark2.end())
            pb = b;
        else
            pb = min(*(mark2.lower_bound(pa)), b);
        vb = getval(pb);
        su += sumr(va, vb);
        //printf ("pa %d pb %d va %d vb %d su %ld\n", pa, pb, va, vb, su);
        pa = pb+1;
    }
    return su;
}

int main () {

    int a, b;
    char t;
    ni = 0;
    scanf ("%d %d ", &n, &m);
    for (int i = 0; i < m; i++) {
        scanf (" %c %d %d", &t, &a, &b);
        //for (int j = 0; j < n; j++)
        //    printf ("%d ", getval(j+1));
        //printf("\n");
        //printf ("a %d b %d\n", a, b);
        if (t == 'I') {
            inv[ni][0] = a;
            inv[ni][1] = b;
            mark.insert( pair<int, int> (a-1,ni));
            mark.insert( pair<int, int> (a,ni));
            mark.insert( pair<int, int> (b,ni));
            mark.insert( pair<int, int> (b+1,ni));
            ni++;
         
        }
        else
            printf("%lld\n", sum(a, b));
    }
  
    return 0;
}
