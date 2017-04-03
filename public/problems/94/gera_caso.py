import random
import sys

def getn(a,b): return random.randint(a,b)

maxN = int(sys.argv[1])
maxM = int(sys.argv[2])

N = getn(1,maxN)
M = getn(1,maxM)

print N, M

alfa = map(chr,range(ord('a'),ord('z')+1))

def tira(a):
	idx = getn(0,len(a)-1)
	return a[0:idx] + a[idx+1:]

def poe(a):
	idx = getn(0,len(a)-1)
	return a[0:idx] + random.choice(alfa) + a[idx:]

def muda(a):
	idx = getn(0,len(a)-1)
	a = a[:idx] + random.choice(alfa) + a[idx+1:]
	return a

def nada(a): return a

funcs = [tira,poe,muda,nada,nada,nada]
pals = []

for i in xrange(N):
	pal=""
	k = getn(1,20)
	for j in xrange(k):
		pal = pal + random.choice(alfa)
	print pal
	pals.append(pal)


for i in xrange(M):
	pal = random.choice(pals)
	for j in xrange(5): 
		f = random.choice(funcs)
		pa = f(pal)
		if len(pa) > 0: pal = pa
	print pal




