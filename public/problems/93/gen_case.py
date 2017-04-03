import random
import os

def getn(a,b): return random.randint(a,b)

random.seed()

QTMaX = 10000

N,M = getn(2,QTMaX), getn(1,QTMaX)

MaX = 1000000000

print N,M

F = [getn(1,MaX) for x in xrange(M)]

def complete(a, n):
	while len(a) < n:
		a = a + [getn(1,MaX) for x in xrange(n-len(a))]
		a.sort()
		for i in xrange(1,n):
			if a[i] == a[i-1]:
				a[i] = a[i] + 1
			if a[i] > MaX:
				a = a[:i]
				break

	return a
	


w = complete([], N-1)
str = "%d" % w[0]
w = w[1:]
for t in w:
	str = str + " %d" % t
print str

w = complete([], N)
str = "%d" % w[0]
w = w[1:]
for t in w:
	str = str + " %d" % t
print str


str = "%d" % F[0]
F = F[1:]
for t in F:
	str = str + " %d" % t


print str




