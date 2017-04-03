from random import *
from sys import *

maxN, maxP, maxQ = int(argv[1]), int(argv[2]), int(argv[3])

ops = [('+',lambda x,y: x + y),('*',lambda x,y:x*y)]

tipo = randint(1,5)

(op,f) = choice(ops)

P = randint(0,maxP)
Q = randint(0,maxQ)
N = 0
result = f(P,Q)

if tipo < 3:
	N = max(result - randint(1,max(result-1,1)), P, Q)
elif tipo == 3:
	N = result
else:
	N = result + randint(1, max(maxN-result, 1))

print N
print P,op,Q
