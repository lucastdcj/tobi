import random
import sys

def get(a,b): return random.randint(a,b)

if len(sys.argv) <= 2:
	print "Usage: %s MIN_N MAX_N" % sys.argv[0]
	sys.exit(0)


maxN = int(sys.argv[1])
maxM = int(sys.argv[2])

N = get(2,maxN)
M = get(N-1,min(maxM,N*(N-1)/2))

print N, M

ja = [[0]*N for i in xrange(N)]
used = [N-1]
unused = range(N-1)
random.shuffle(unused)

arestas = []

for n in unused:
	p = random.choice(used)
	arestas.append((n,p,get(1,1000)))
	ja[n][p] = 1
	ja[p][n] = 1

M -= N-1

for i in xrange(M):

	while 1:
		a = get(0,N-1)
		b = get(0,N-1)
		if a == b:
			continue
		if ja[a][b] or ja[b][a]:
			continue
		break
	arestas.append((a,b,get(1,1000)))
	ja[a][b] = 1
	ja[b][a] = 1

random.shuffle(arestas)
	
for ar in arestas:
	(x,y,u) = ar
	print min(x,y), max(x,y), u 

