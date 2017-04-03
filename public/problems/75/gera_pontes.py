from random import *
from sys import *

minn,maxn,minm,maxm = int(argv[1]),int(argv[2]), int(argv[3]), int(argv[4])

n = randint(minn,maxn)+2

mm = max(minm,n-1)
m = randint(mm, min(maxm,n*(n-1)/2))

print n-2, m
foi = [[0]*n for i in xrange(n)]

for i in xrange(n-1):
	k = randint(0,i)
	foi[k][i+1] = foi[i+1][k] = 1
	print i+1, k, randint(0,1000)

for i in xrange(n,m):
	k = 0
	p = 0
	while p == k or foi[k][p]:
		k = randint(0,n-1)
		p = randint(0,n-1)
		
	foi[k][p] = foi[p][k] = 1
	print k,p,randint(0,1000)


